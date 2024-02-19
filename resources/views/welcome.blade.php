@extends('layout.layout')

@section('title', 'Dashboard')

@section('content')
<section class="main_banner">
    <div class="container">
        <div class="banner">
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
