<?php

use App\Models\Blank;
use Illuminate\Database\Seeder;

class BlankSeeder extends Seeder
{
    private $blanks = [
        'Личная информация',
        'Резюме',
        'Фото ',
        'Справка с предыдущего места работы ',
        'Личные достижения ',
        'Справка 086',
        'Ученая степень',
        'Рекомендации',
        'Сведения о себе ',
        'Навыки',
        'Личный листок',
        'Заявление',
        'Учебное методическая деятельность преподователя',
        'Внеучебная деятельность преподователя',
        'Сведения об учебном методической работе преподователя кафедры за последние три года',
        'Сведения работе преподователя над темами самообразования',
        'Динамика роста профессионального мастерства преподователя кафедры',
        'Достижение преподователя и студентов по кафедре',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->blanks as $name) {
            $blank = new Blank();
            $blank->name = $this->mb_ucfirst($name);
            $blank->link = 123;
            $blank->save();
        }
    }

    private function mb_ucfirst($string)
    {
        return mb_strtoupper(mb_substr($string, 0, 1)).mb_strtolower(mb_substr($string, 1));
    }
}
