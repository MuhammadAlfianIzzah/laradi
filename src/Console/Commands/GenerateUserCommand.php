<?php

namespace Alfianizzah\Laradi\Console\Command;

use Alfianizzah\Laradi\Models\UserModel;
use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laradi:generate-user {jumlah}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jumlah = $this->argument("jumlah");
        if (strlen($jumlah) == 0) {
            $this->info("argumen jumlah dibutuhkan");
            return;
        }
        for ($i = 0; $i <= $jumlah; $i++) {
            $faker = Factory::create("id_ID");
            $attr = [
                "name" => $faker->name,
                "email" => $faker->email,
                "password" => Hash::make($faker->name),
            ];
            UserModel::create($attr);
        }
    }
}
