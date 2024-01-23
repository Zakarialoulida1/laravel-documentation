<h1>hi {{ $person['name'] . ' ' . $person['id'] }}</h1>
@unless (count($languages) < 0)

    <table border="1" width='100%'>

        <tr>
            <thead>cours</thead>
        </tr>
        @foreach ($languages as $language)
            <tr>
                <td>

                    {{ $language }}

                </td>
            </tr>
        @endforeach

    </table>
@else
    <h1>pas de cours</h1>
@endunless
{{-- if the variable exist at the memory the code inside isset will be executed --}}
@isset($age)
    yees
@endisset
{{-- if the variable is empty at the memory the code inside isset will be executed --}}
@empty($name)
    yees
@endempty


@switch($color)
    @case('red')
        rouge
        @break
    @case('blue')
        bleu
        @break
    @default
        <h1>no color</h1>
@endswitch

@php
    $n3=$n1+$n2
@endphp
<h1>{{$n3}}</h1>
