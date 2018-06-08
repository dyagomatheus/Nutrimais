<?php

use Illuminate\Database\Seeder;

class pacients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
          ['id'=>'1', 'name'=>'João Canabrava', 'sex'=>'Masculino', 'date_birth'=>'1994-10-09', 'number_phone'=>'(89) 99543-9192', 'email'=>'jaocana@mail.com'],
          ['id'=>'2', 'name'=>'Mario Jorge', 'sex'=>'Masculino', 'date_birth'=>'1992-10-09', 'number_phone'=>'(89) 99921-1212', 'email'=>'marui@mail.com'],
          ['id'=>'3', 'name'=>'Marilene Santos', 'sex'=>'Feminino', 'date_birth'=>'1984-12-02', 'number_phone'=>'(89) 99512-2292', 'email'=>'marilene@mail.com'],
          ['id'=>'4', 'name'=>'Patricia Meireles', 'sex'=>'Feminino', 'date_birth'=>'1992-08-01', 'number_phone'=>'(89) 99523-1132', 'email'=>'paty@mail.com'],
          ['id'=>'5', 'name'=>'Miguel Arcanjo', 'sex'=>'Masculino', 'date_birth'=>'1994-12-05', 'number_phone'=>'(89) 99522-4255', 'email'=>'miguel@mail.com'],
        ];

        DB::table('pacients')->insert($data);
    }
}
