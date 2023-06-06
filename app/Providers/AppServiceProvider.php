<?php

namespace App\Providers;

use App\Models\Form;
use App\Models\State;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMacros();
        $this->bootObservers();

    }

    public function registerMacros()
    {
        $this->registerResponseMacros();
        $this->registerMigrationMacros();
        $this->registerCustomBladeDirectives();
        $this->registerCarbonOptions();
        $this->registerApplicationStates();
    }

    public function registerResponseMacros()
    {
        /**
         * Creates a standard json structure for consistent api responses in a simple way.
         * {"status": true, "title": "Some title", "message": "Successful", "data": [a, b, c]}
         */
        Response::macro('api', function ($response, $status = 200) {
            $format = ['status' => ($status < 400), 'title' => '', 'message' => '', 'data' => []];

            // For convenience, if $response is a string, we'll use it as the message...
            if (! is_array($response)) $response = ['message' => $response];

            return response(array_merge($format, $response), $status);
        });
    }

    public function registerCustomBladeDirectives()
    {
        Blade::if('admin', function (User $user = null) {
            return ($user ?? user())->isAdmin();
        });

        Blade::if('therapist', function (User $user = null) {
            return ($user ?? user())->isMasseur();
        });

        Blade::if('client', function (User $user = null) {
            return ($user ?? user())->isClient();
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo number_format($expression, 2) ?>";
        });
    }

    public function registerCarbonOptions()
    {
        Carbon::setHumanDiffOptions(Carbon::JUST_NOW | Carbon::ONE_DAY_WORDS);

        Carbon::macro('greet', function () {
            $hour = now()->format('H');

            if ($hour < 12) return 'Morning';

            if ($hour < 17) return 'Afternoon';

            return 'Evening';
        });
    }

    public function registerMigrationMacros()
    {
        Blueprint::macro('authors', function () {
            $this->foreignId('created_by')->nullable()->constrained('users');
            $this->foreignId('updated_by')->nullable()->constrained('users');
        });
    }

    public function registerApplicationStates()
    {
        $this->app->bind('states',
            fn () => cache()->rememberForever('states',
                fn () => State::all()
            )
        );
    }

    public function bootObservers()
    {
        User::observe(UserObserver::class);
    }
}
