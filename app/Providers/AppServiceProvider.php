<?php
namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Gate::define('Administrateur',function(User $user){
            return $user->isAdmin();
        });
        Gate::define('Professeur', function(User $user){
            return $user->isModerator();
        });
        Gate::define('Etudiant', function(User $user){
            return $user->isUser();
        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
