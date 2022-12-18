<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodingLanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $languages = [
        ['html', ''],
        ['css', '' ],
        ['javascript', '' ],
        ['php', '' ],
        ['python', '' ],
        ['C', '' ],
        ['C++', '' ],
        ['java', '' ],
        ['ruby', '' ],
        ['go', '' ],
        ['kotlin', '' ],
        ['SQL', '' ],
        ['rust', '' ],
        ['C#', '' ],
        ['dart', ''],
    ];

    public $frameworks = [
        'bootstrap' => 'css',
        'tailwind' => 'css',
        'jquery' => 'javascript',
        'react' => 'javascript',
        'vue' => 'javascript',
        'angular'=> 'javascript',
        'nextJs' => 'javascript',
        'nodeJs' => 'javascript',
        'svelte' => 'javascript',
        'express' => 'javascript',
        'laravel' => 'php',
        'symfony' => 'php',
        'codeIgniter' => 'php',
        'django' => 'python',
        'flask' => 'python',
        'fastAPI' => 'python',
        'springboot'=> 'java',
        '.NET' => 'C#',
        'flutter' => 'dart',
        'threeJs' => 'javascript',
        'typescript' => 'javascript'
    ];
    
    public function run()
    {
        foreach($this->languages as $language)
        {
            DB::table('technologies')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
