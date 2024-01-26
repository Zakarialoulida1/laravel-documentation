<x-master title="all profiles">
    <h3 class="text-center">profiles</h3>
    <table class='table'>
   <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>bio</th>
   </tr>
   
    @foreach ($profiles as $profil)
<tr>
    <td>{{$profil->id}}</td>
    <td>{{$profil->name}}</td>
    <td>{{$profil->email}}</td>
    <td>{{Str::limit($profil->bio,50)}}</td> 
    {{-- the third param in str:: limit defin (... orother) ***vous pouvez ecrire autre que 3 points ' --}}
</tr>
        
    @endforeach
 </table>
 {{$profiles->links()}}
</x-master>

