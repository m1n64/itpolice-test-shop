<?php

namespace App\Console\Commands;

use App\Enums\RolesEnum;
use App\Models\User;
use ClassTransformer\ClassTransformer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminCommand extends Command
{

    /**
     * @param User $user
     */
    public function __construct(
        protected User $user,
    )
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = "Admin";
        $email = "admin@admin.com";
        $password = "admin123";

        $user = $this->user::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        $user->assignRole(RolesEnum::ADMIN->value);

        $this->table(
            ['name', 'email', 'password'],
            [
                [$name, $email, $password]
            ]
        );

        return Command::SUCCESS;
    }
}
