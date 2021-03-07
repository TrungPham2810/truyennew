<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // policy category controller
        Gate::define('list_category', 'App\Policies\CategoryPolicy@viewAny');
        Gate::define('delete_category', 'App\Policies\CategoryPolicy@delete');
        Gate::define('edit_category', 'App\Policies\CategoryPolicy@update');
        Gate::define('add_category', 'App\Policies\CategoryPolicy@create');

        // policy role controller
        Gate::define('list_role', 'App\Policies\AuthorizationRolePolicy@viewAny');
        Gate::define('delete_role', 'App\Policies\AuthorizationRolePolicy@delete');
        Gate::define('edit_role', 'App\Policies\AuthorizationRolePolicy@update');
        Gate::define('create_role', 'App\Policies\AuthorizationRolePolicy@create');

        // policy user controller
        Gate::define('list_user', 'App\Policies\UserPolicy@viewAny');
        Gate::define('delete_user', 'App\Policies\UserPolicy@delete');
        Gate::define('edit_user', 'App\Policies\UserPolicy@update');
        Gate::define('create_user', 'App\Policies\UserPolicy@create');

        // policy book controller
        Gate::define('list_book', 'App\Policies\BookPolicy@viewAny');
        Gate::define('delete_book', 'App\Policies\BookPolicy@delete');
        Gate::define('edit_book', 'App\Policies\BookPolicy@update');
        Gate::define('create_book', 'App\Policies\BookPolicy@create');

        // policy author controller
        Gate::define('list_author', 'App\Policies\AuthorPolicy@viewAny');
        Gate::define('delete_author', 'App\Policies\AuthorPolicy@delete');
        Gate::define('edit_author', 'App\Policies\AuthorPolicy@update');
        Gate::define('create_author', 'App\Policies\AuthorPolicy@create');

        // policy chapter controller
        Gate::define('list_chapter', 'App\Policies\ChapterPolicy@viewAny');
        Gate::define('delete_chapter', 'App\Policies\ChapterPolicy@delete');
        Gate::define('edit_chapter', 'App\Policies\ChapterPolicy@update');
        Gate::define('create_chapter', 'App\Policies\ChapterPolicy@create');

        // policy tag controller
        Gate::define('list_tag', 'App\Policies\TagPolicy@viewAny');
        Gate::define('delete_tag', 'App\Policies\TagPolicy@delete');
        Gate::define('edit_tag', 'App\Policies\TagPolicy@update');
        Gate::define('create_tag', 'App\Policies\TagPolicy@create');

        // policy rule controller
        Gate::define('list_rule', 'App\Policies\AuthorizationRulePolicy@viewAny');
        Gate::define('delete_rule', 'App\Policies\AuthorizationRulePolicy@delete');
        Gate::define('edit_rule', 'App\Policies\AuthorizationRulePolicy@update');
        Gate::define('create_rule', 'App\Policies\AuthorizationRulePolicy@create');

        // policy translator controller
        Gate::define('list_translator', 'App\Policies\TranslatorPolicy@viewAny');
        Gate::define('delete_translator', 'App\Policies\TranslatorPolicy@delete');
        Gate::define('edit_translator', 'App\Policies\TranslatorPolicy@update');
        Gate::define('create_translator', 'App\Policies\TranslatorPolicy@create');
    }
}
