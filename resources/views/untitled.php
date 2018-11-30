Route::get('/editarViajero/{id}', ['as' => 'editarViajero', 'uses' => 'ControladorViajero@edit']); 




<td>
                                          <form action="{{action('ControladorViajero@destroy', $viajero->id)}}" method="post">
                                           {{csrf_field()}}
                                           <input name="_method" type="hidden" value="DELETE">
                         
                                        