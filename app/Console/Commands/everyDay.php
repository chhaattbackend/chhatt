<?php

namespace App\Console\Commands;

use App\Post;
use App\Property;
use Illuminate\Console\Command;

class everyDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will migrate data ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
            $posts = Post::all();
            $count = 0;
            foreach ($posts as $post ){

             $abc =  Property::where('per_id',$post->id)->first();

             if($abc != null){

                $count ++;


             }

            }
            echo $count;

    }
}
