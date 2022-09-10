<?php

namespace App\Services;

use App\Models\Reserva;
use Carbon\Carbon;

class ReservaService {

    /**
     * Inactivar reservas pasadas 24 horas
     *
     */
    public function inactivar() {

        try {

            $dateLimit = Carbon::now()->addHour(-24);

            Reserva::where('fecha_reserva', '<=', $dateLimit)
                   ->update(['activo' => false]);

        } catch(\Exception $ex) {

            dd($ex);

        }

    }

}
