<?php

namespace Database\Seeders;

use App\Models\Technologies;
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

     //1.name, 2.description, 3.IsLanguage
    public $technologies = [
        ['html', '', '1'],
        ['css', '', '1' ],
        ['javascript', '', '1' ],
        ['php', '', '1' ],
        ['python', '', '1' ],
        ['C', '', '1' ],
        ['C++', '', '1' ],
        ['java', '', '1' ],
        ['ruby', '', '1' ],
        ['go', '', '1' ],
        ['kotlin', '', '1' ],
        ['SQL', '', '1' ],
        ['rust', '', '1' ],
        ['C#', '', '1' ],
        ['dart', '', '1'],

        ['bootstrap', '', '0'],
        ['tailwind', '', '0'],
        ['jquery', '', '0'],
        ['react', '', '0'],
        ['vue', '', '0'],
        ['angular', '', '0'],
        ['nextJs', '', '0'],
        ['nodeJs', '', '0'],
        ['svelte', '', '0'],
        ['express', '', '0'],
        ['laravel', '', '0'],
        ['symfony', '', '0'],
        ['codeIgniter', '', '0'],
        ['django', '', '0'],
        ['flask', '', '0'],
        ['fastAPI', '', '0'],
        ['springboot', '', '0'],
        ['.NET', '', '0'],
        ['flutter', '', '0'],
        ['threeJs', '', '0'],
        ['typescript', '', '0'],
        
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
        foreach($this->technologies as $language)
        {
            DB::table('technologies')->insert([
                'name' => $language[0],
                'description' => $language[1],
                'is_language' => $language[2],
            ]);
        }

        foreach($this->frameworks as $framework => $language)
        {
            $languageID = Technologies::where('name', $language)->first(['id']);
            $frameworkID = Technologies::where('name', $framework)->first(['id']);

            DB::table('not_languages')->insert([
                'technologies_id' => $frameworkID->id,
                'language_id' => $languageID->id,
            ]);

            
        }
    }
}
