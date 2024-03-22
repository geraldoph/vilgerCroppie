<?php


namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\EnviaEmail;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Utilidades;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;




class CadastroController extends Controller
{




    public function fotoCrop(Request $request)
    {

            $imagePath = $request->imagePath; 

            $width = str_replace("px", "", $request->width) ; 
            $height = str_replace("px", "", $request->height) ; 
            $left = str_replace("px", "", $request->left)*-1 ; 
            $top = str_replace("px", "", $request->top)*-1 ; 

            $viewLargura = $request->viewLargura;
            $viewAltura = $request->viewAltura;
            


            $manager = new ImageManager(new Driver());
            $image = $manager->read($imagePath);

           
            $OriginalWidth = $image->width();
            $OriginalHeight = $image->height();
            


                $ampliacao = $height / $viewAltura;
                $proporcao_original_view = $OriginalHeight / $viewAltura;

                $height = $OriginalHeight / $ampliacao;
                $width = $height * $viewLargura / $viewAltura;
                $left = $left * $proporcao_original_view / $ampliacao;
                $top = $top * $proporcao_original_view / $ampliacao; 

                $image->crop($width, $height, $left, $top);
                $image->toWebp(90)->save("teste/resultado.webp"); 




        return response()->json(['resultado' => 'ok']);
    }
    
 

}
