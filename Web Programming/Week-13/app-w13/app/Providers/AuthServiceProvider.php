<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Book;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Admin bisa melakukan create
        Gate::define('create-book', function(User $user){
            return $user->role_id === 1;
        });

        Gate::define('update-book', function(User $user, Book $book){
            return $user->id === $book->user_id;
        });

        Gate::define('delete-book', function(User $user, Book $book){
            return $user->id === $book->user_id;
        });
    }
}
