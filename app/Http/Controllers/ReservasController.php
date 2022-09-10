<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Reserva;
use App\Services\ReservaService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('cliente')
                           ->with('carro')
                           ->get();

        return view('Reserva.index', ['reservas' => $reservas]);
    }

    public function create()
    {
        $clientes = Cliente::all();
        $carros = Carro::all();

        return view('Reserva.create', [
            'clientes' => $clientes,
            'carros' => $carros,
        ]);
    }

    public function store(Request $request)
    {
        try {

            // Inactivar reservas pasadas 24 horas
            $reservaService = new ReservaService();
            $reservaService->inactivar();

            // Validar si carro está disponible el día de hoy
            $reserva = Reserva::where('carro_id', '=', $request->carro_id)
                              ->where('fecha_reserva', '=', Carbon::today()->toDateString())
                              ->where('activo', '=', true)
                              ->first();

            if (!empty($reserva)) {

                return view('layouts.message', ['mensaje' => 'Carro ya está reservado']);

            }

            // Validar si cliente tiene menos de 3 reservas
            $reservaCount = Reserva::where('cliente_id', '=', $request->carro_id)
                                   ->where('activo', '=', true)
                                   ->count();

            if ($reservaCount >= 3) {

                return view('layouts.message', ['mensaje' => 'El cliente tiene ya tiene 3 reservas']);

            }

            $reserva = new Reserva();
            $reserva->cliente_id = $request->cliente_id;
            $reserva->carro_id = $request->carro_id;
            $reserva->fecha_reserva = Carbon::parse($request->fecha_reserva);
            $reserva->activo = true;

            $reserva->save();

            return view('layouts.message', ['mensaje' => 'Reserva realizada con éxito']);

        } catch (\Exception $ex){

            dd($ex);

        }
    }
}
