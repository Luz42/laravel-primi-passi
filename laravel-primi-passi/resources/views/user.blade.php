<h3>Sezione Utenti</h3>

@include('nav.nav')
@php
 $users = [
    [
        'nome' => 'Mario',
        'cognome' => 'Rossi'
    
    ],
    [
        'nome' => 'Giuseppe',
        'cognome' => 'Verdi'
    
    ],
    [
        'nome' => 'Piero',
        'cognome' => 'Bianchi'
    
    ],
];   
@endphp

<div>
    @foreach ($users as $user)
        <ul>
            <li>{{$user['nome']}}</li>
            <li>{{$user['cognome']}}</li>
        </ul>
    @endforeach
</div>