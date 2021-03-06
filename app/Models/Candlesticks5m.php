<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Jan 2018 05:03:33 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Candlesticks5m
 * 
 * @property int $id
 * @property string $symbol
 * @property \Carbon\Carbon $datetime_
 * @property float $open
 * @property float $high
 * @property float $low
 * @property float $close
 * @property float $volume
 * @property float $avg_ohlc
 * @property float $avg_oc
 * @property float $avg_hl
 * @property float $perc_change_vs_1
 * @property float $perc_change_vs_2
 * @property float $perc_change_vs_3
 * @property float $perc_change_vs_4
 * @property float $ma4
 * @property float $ma9
 * @property float $ma20
 * @property float $ema4
 * @property float $ema5
 * @property float $ema9
 * @property float $wma4
 * @property float $wma9
 * @property float $wma20
 * @property float $wema4
 * @property float $wema5
 * @property float $wema9
 * @property float $mapc3
 * @property float $mapc4
 * @property float $mapc5
 * @property float $mapc6
 * @property float $emapc3
 * @property float $emapc4
 * @property float $emapc5
 * @property float $emapc6
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Candlesticks5m extends Eloquent
{
	protected $table = 'candlesticks_5m';

	protected $casts = [
		'open' => 'float',
		'high' => 'float',
		'low' => 'float',
		'close' => 'float',
		'volume' => 'float',
		'avg_ohlc' => 'float',
		'avg_oc' => 'float',
		'avg_hl' => 'float',
		'perc_change_vs_1' => 'float',
		'perc_change_vs_2' => 'float',
		'perc_change_vs_3' => 'float',
		'perc_change_vs_4' => 'float',
		'ma4' => 'float',
		'ma9' => 'float',
		'ma20' => 'float',
		'ema4' => 'float',
		'ema5' => 'float',
		'ema9' => 'float',
		'wma4' => 'float',
		'wma9' => 'float',
		'wma20' => 'float',
		'wema4' => 'float',
		'wema5' => 'float',
		'wema9' => 'float',
		'mapc3' => 'float',
		'mapc4' => 'float',
		'mapc5' => 'float',
		'mapc6' => 'float',
		'emapc3' => 'float',
		'emapc4' => 'float',
		'emapc5' => 'float',
		'emapc6' => 'float'
	];

	protected $dates = [
		'datetime_'
	];

	protected $fillable = [
		'symbol',
		'datetime_',
		'open',
		'high',
		'low',
		'close',
		'volume',
		'avg_ohlc',
		'avg_oc',
		'avg_hl',
		'perc_change_vs_1',
		'perc_change_vs_2',
		'perc_change_vs_3',
		'perc_change_vs_4',
		'ma4',
		'ma9',
		'ma20',
		'ema4',
		'ema5',
		'ema9',
		'wma4',
		'wma9',
		'wma20',
		'wema4',
		'wema5',
		'wema9',
		'mapc3',
		'mapc4',
		'mapc5',
		'mapc6',
		'emapc3',
		'emapc4',
		'emapc5',
		'emapc6'
	];
}
