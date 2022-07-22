
public function download()
{
    $data = [
        'titulo' => 'Styde.net'
    ];

    $pdf = \PDF::loadView('vista-pdf', $data);

    return $pdf->download('archivo.pdf');
}