<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Category;
use App\Models\Consultation;
use App\Models\Course;
use App\Models\Feelings\Feeling;
use App\Models\Feelings\FeelingGroup;
use App\Models\General;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Systems\Role;
use App\Models\User;
use App\Policies\CategoryPolicy;
use App\Policies\ConsultationPolicy;
use App\Policies\CoursePolicy;
use App\Policies\FeelingGroupPolicy;
use App\Policies\FeelingPolicy;
use App\Policies\GeneralPolicy;
use App\Policies\PartnerPolicy;
use App\Policies\PostPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        General::class          => GeneralPolicy::class,
        User::class             => UserPolicy::class,
        Role::class             => RolePolicy::class,
        Category::class         => CategoryPolicy::class,
        Feeling::class          => FeelingPolicy::class,
        FeelingGroup::class     => FeelingGroupPolicy::class,
        Partner::class          => PartnerPolicy::class,
        Post::class             => PostPolicy::class,
        Consultation::class     => ConsultationPolicy::class,
        Course::class           => CoursePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
