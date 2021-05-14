<?php


class AssinaDocumentoClass
{
    private $ProprietarioDocumento = "Joao";
    private $ValidadeDocumento = "30/11/2020";

    public function assinarDocumento() {
        return print_r(
            [
                "Proprietario do documento" => $this->ProprietarioDocumento,
                "Data de validade do documento" => $this->ValidadeDocumento
            ]
        );
    }
}
