<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')
        ->insert(
            [
                ['user_id' => 5, 'week_id' => 1, 'title' => 'Investir em Cryptomoeda', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 1, 'title' => 'Estudar Clean code', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 2, 'title' => 'Treinar', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 1, 'title' => 'Ir comer fora', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 2, 'title' => 'Estudar', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 2, 'title' => 'Trabalhar', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 3, 'title' => 'Viajar para a praia', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 4, 'title' => 'Fazer compras', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 1, 'title' => 'Estudar Laravel', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 2, 'title' => 'Ler livro sobre produtividade', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 3, 'title' => 'Praticar meditação', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 4, 'title' => 'Aprimorar habilidades de comunicação', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 5, 'title' => 'Assistir a documentários', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 6, 'title' => 'Trabalhar no projeto pessoal', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 7, 'title' => 'Fazer cursos online', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 1, 'title' => 'Jogar videogame', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 2, 'title' => 'Estudar Inglês', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 3, 'title' => 'Cuidar da saúde', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 4, 'title' => 'Estudar marketing digital', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 5, 'title' => 'Viajar para o interior', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 6, 'title' => 'Assistir a filmes', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 7, 'title' => 'Tocar instrumento musical', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 1, 'title' => 'Ler sobre finanças', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 2, 'title' => 'Programar em Python', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 3, 'title' => 'Correr ao ar livre', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 4, 'title' => 'Fazer backup de arquivos', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 5, 'title' => 'Redecorar a casa', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 6, 'title' => 'Estudar psicologia', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 7, 'title' => 'Visitar museus', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 3, 'title' => 'Trabalhar em equipe', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 4, 'title' => 'Estudar novas tecnologias', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 5, 'week_id' => 5, 'title' => 'Fazer intercâmbio', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 3, 'title' => 'Tocar piano', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 4, 'title' => 'Ler sobre design gráfico', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 6, 'week_id' => 5, 'title' => 'Fazer voluntariado', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 3, 'title' => 'Fazer limpeza na casa', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 4, 'title' => 'Estudar design de interiores', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 5, 'title' => 'Aprimorar habilidades culinárias', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 6, 'title' => 'Iniciar podcast', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 7, 'week_id' => 7, 'title' => 'Criar site pessoal', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 2, 'title' => 'Estudar JavaScript', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 3, 'title' => 'Fazer terapia', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 4, 'title' => 'Assistir a série', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 5, 'title' => 'Ler sobre inteligência artificial', 'priority' => 1, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 6, 'title' => 'Fazer curso de fotografia', 'priority' => 2, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
                ['user_id' => 8, 'week_id' => 7, 'title' => 'Fazer planejamento de carreira', 'priority' => 3, 'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())],
            ]
        );
    }
}
