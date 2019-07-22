<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Aluno;
class AlunoController extends Controller{
    
    public function cadastrarAluno(Request $request){
        if($request->isMethod('GET')){
            return view("cadastroAluno");
        }
        $novoAluno = new Aluno();
        $novoAluno->nome = $request->nome;
        $novoAluno->cpf = $request->cpf;
        $resultado =  $novoAluno->save();
        
        if($resultado){
            return view('sucesso',['erro'=>false, 'aluno'=>$novoAluno]);
        }else{
            return view('sucesso',["nome"=> $request->nome,"sobrenome"=> $request->sobrenomesobrenome]);
                // "nome"=> $request->nome,
                // "sobrenome"=> $request->sobrenomesobrenome
            // ]);
            }
        }
    
    
    public function listarAluno(Request $request){
        $alunos = new Aluno();
        $listaAlunos = $alunos->all();

        return view('listaAluno',['alunos'=>$listaAlunos]);
        }

    public function deletarAluno(Request $request, $id){
            $aluno = Aluno::find(id);
            $alunos-> delete();

            return redirect("/aluno/todos");
    }
}
   