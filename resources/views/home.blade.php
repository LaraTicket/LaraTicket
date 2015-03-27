@extends('layouts.main')

@section('content')
    <div class="row collapse">
        <div class="small-6 medium-8 columns">
            <h1 class="title">
                {{ trans('tickets.title') }}
            </h1>
        </div>
        
        <div class="small-6 medium-4 columns">
            <form method="GET" class="search">
                <div class="row">
                    <div class="row collapse postfix-radius">
                        <div class="small-8 columns">
                            <input type="text"
                                   name="search"
                                   class="search-input"
                                   placeholder="Search..."
                            />
                        </div>
                        
                        <div class="small-4 columns">
                            <button type="submit"
                                    class="search-button secondary postfix"
                            >
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <table id="tickets" class="full-width">
        <tr>
            <th>{{ trans('tickets.ticket') }}</th>
            <th>Comments</th>
            <th>Labels</th>
            <th>Submission</th>
        </tr>
        
        @foreach(range(1, 20) as $x)
            <tr>
                <td class="ticket">
                    <h3 class="title">
                        <a href="#">
                            Lorem ipsum dolor sit amet, consectetur
                        </a>
                    </h3>
                    Assigned to: <a href="#">user@example.com</a>
                </td>
                <td class="comments">
                    <a href="" class="comments">
                        <i class="fa fa-comments"></i>
                        4
                    </a>
                </td>
                <td class="labels">
                    <a href="#">
                        <span class="label turquoise-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label green-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label blue-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label midnight-blue-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label yellow-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label orange-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label red-background">Bug</span>
                    </a>
                    <a href="#">
                        <span class="label concrete-background">Bug</span>
                    </a>
                </td>
                <td class="submission">
                    <time>25 Mar 18:30</time><br />
                    By <a href="#">customer366493@example.com</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
