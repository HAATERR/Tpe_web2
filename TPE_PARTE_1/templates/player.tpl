{include file="header.tpl"}
        
        <div class="col-sm-6 mt-5 mb-5">
       
         
        
                 <div class="card">
                     <div class="card-body">
                     
                         <h5 class='card-title'>Nombre: {$player->Player_Name}</h5>
                         <p class='card-text'>Posicion: {$player->Position}</p>
                         <p class='card-text'>Equipo: {$player->Team}</p>
                         <p class='card-text'>Numero: {$player->Number}</p>
                         <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                         <a href='showUpdatePlayer/{{$player->Player_id}}' class='btn btn-primary'type='button'>Editar</a>
                         <a  href='deletePlayer/{{$player->Player_id}}'  type="button" class="btn btn-danger">Eliminar</a>
                         </div>
                     </div>
                 </div>
             

     {include file="footer.tpl"}