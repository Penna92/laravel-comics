@extends('layouts.base')

@section('mainContent')
<div id="jumbotron"></div>
<div id="grid" class="container">
    <div id="card-label">
        <h3>Current Series</h3>
    </div>
    <ul>
        @foreach ($cards as $card)
        <li>
            <a href="action">
                {{-- In questo momento tutte le cards reindirizzano alla pagina /action
                Potrei aggiungere una struttura dati con 12 parametri (/action, /american-vampire, /aquaman) e
                aggiungergli dinamicamente alle ancore del link, così da poter effettuare il routing per tutte e 12 le
                cards nelle rispettive single pages.
                --}}
                <img src="{{$card['thumb']}}" alt="{{$card['series']}}" />
                <h4>{{ $card['series'] }}</h4>
            </a>
        </li>
        @endforeach
    </ul>
    <button>LOAD MORE</button>
    @endsection

    @section('upperFooter')
</div>
<div id="upper-footer" class="container">
    <ul>
        @foreach ($merch as $item)
        <li>
            <img src="{{$item['icon']}}" alt="{{$item['description']}}" />
            <a href="{{$item['link']}}">{{ $item['description'] }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection