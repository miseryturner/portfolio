@extends('layout.layout')

@section('title', 'Dashboard')

@section('content')
<section class="info">
    <div class="container">
        <h2 class="project_title">О себе</h2>
        <div class="info_text">
            Приветствую, меня зовут Максим! Я являюсь web разработчиком c уклоном в php/laravel.
            Обладаю глубоким пониманием архитектуры MVC и SOLID принципов. Имею опыт разработки высоконагруженных веб-приложений, используя Laravel, bitrix, node.js и другие современные технологии. Являюсь экспертом в разработке RESTful API и интеграции сторонних сервисов. Владею навыками работы с базами данных, включая MySQL и PostgreSQL. Умею эффективно работать в команде и готов к новым вызовам.<br>
            Имею опыт работы в качестве руководителя команды программистов.
        </div>
        <div class="slider_projects info_list">
            @foreach ($info as $project)
                <a target="_blank" {{$project->link ? 'href='.$project->link : ''}} class="project_card">
                    <div class="image">
                        <img src="/portfolio/public{{$project->image}}" alt="">
                    </div>
                    <div class="card_title">
                        {{$project->title}}
                    </div>
                    <div class="card_desc">
                        {{$project->description}}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
<section class="full_project">
    <div class="container">
        <h2 class="project_title">Созданные с нуля проекты</h2>
        <div class="slider_projects">
            @foreach ($projects_full as $project)
                <a target="_blank" href="{{$project->link}}" class="project_card">
                    <div class="image">
                        <img src="/portfolio/public{{$project->image}}" alt="">
                    </div>
                    <div class="card_title">
                        {{$project->title}}
                    </div>
                    <div class="card_desc">
                        {{$project->description}}
                    </div>
                    @if ($project->tools->count())
                        <div class="tech">
                            <div class="tech_list">
                                @foreach ($project->tools as $tool)
                                    <span class="{{$tool->code}}-icon"></span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="full_project">
    <div class="container">
        <h2 class="project_title">Доработки (поддержка проектов на протяжении долгого времени)</h2>
        <div class="slider_projects">
            @foreach ($projects_tasks as $project)
                <a target="_blank" href="{{$project->link}}" class="project_card">
                    <div class="image">
                        <img src="/portfolio/public{{$project->image}}" alt="">
                    </div>
                    <div class="card_title">
                        {{$project->title}}
                    </div>
                    <div class="card_desc">
                        {{$project->description}}
                    </div>
                    @if ($project->tools->count())
                        <div class="tech">
                            <div class="tech_list">
                                @foreach ($project->tools as $tool)
                                    <span class="{{$tool->code}}-icon"></span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</section>

@endsection
