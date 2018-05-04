<?php

namespace App\Http\Requests;

class ProdutoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Regras para validacoes de campos, com isto fazemos as validacoes nos campos necessarios
     * caso haja algum erro, o sistema enviara uma mensagem ao usuario
     *
     * No Controler foi passado um Request, para que o sistema passe a validar os itens
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:50|min:2',
            'descricao' => 'required|max:4999|min:15',
            'valor' => 'required|numeric',
            'quantidade' => 'required|max:5|min:1',
            'tamanho' => 'required|max:150'
        ];
    }

    /**
     *
     * Funcao para retornar mensagens personalizadas ao usuario,
     * aqui estamos criando formas amigaveis aonde foi gerado o erro :D
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatorio',
            'min' => 'O :attribute tem um tamanho minimo :min',
            'max' => 'O :attribute tem um tamanho maximo :max'
        ];
    }
}
