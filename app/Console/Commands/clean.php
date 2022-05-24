<?php

namespace App\Console\Commands;

use App\Models\Counter;
use App\Models\Department;
use App\Models\User;
use Illuminate\Console\Command;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make:clean comand for clean the project';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('view:clear');
        $this->call('route:clear');
        $this->call('clear-compiled');
        $this->call('migrate:refresh');

        //create new department

        $department = new Department();
        $department->name = 'it';
        $department->description = 'it department';
        $department->save();

        //create counter of this department
        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = 'counter1';
        $counter->description = 'counter1 description';
        $counter->save();


        $department = new Department();
        $department->name = 'hr';
        $department->description = 'hr department';
        $department->save();

        //create counter of this department
        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = 'counter2';
        $counter->description = 'counter2 description';
        $counter->save();


        $department = new Department();
        $department->name = 'nadara';
        $department->description = 'admin department';
        $department->save();

        //create counter of this department
        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = 'counter3';
        $counter->description = 'counter3 description';
        $counter->save();


        $department = new Department();
        $department->name = 'sales';
        $department->description = 'sales department';
        $department->save();

        //create counter of this department
        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = 'counter4';
        $counter->description = 'counter4 description';
        $counter->save();


        $department = new Department();
        $department->name = 'marketing';
        $department->description = 'marketing department';
        $department->save();

        //create counter of this department
        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = 'counter5';
        $counter->description = 'counter5 description';
        $counter->save();


        // creating a user
        $user = new User();
        $user->name = "raheel anwaar";
        $user->email = "raheel318@gmail.com";
        $user->password = bcrypt('asdfasdf');
        $user->save();

        return 0;
    }
}
