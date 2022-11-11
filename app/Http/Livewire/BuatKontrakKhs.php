<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\KontrakInduk;
use App\Models\Skk;
use App\Models\Prk;
use App\Models\Rab;
use App\Models\Pejabat;
use App\Models\ItemRincianInduk;
use App\Models\RincianInduk;
use App\Models\OrderedRab;
use Illuminate\Support\Str;


class BuatKontrakKhs extends Component
{
    // use WithFileUploads;
    public $nomor_po;
    public $kontrak_induk;
    public $pekerjaan;
    public $lokasi;
    public $startDate;
    public $endDate;
    public $skk_id;
    public $prk_id;
    public $nomor_kontrak;
    public $pejabat;
    public $pengawas;

    //Database orderedRAB

    public $kategori_ordered;
    public $item_ordered;
    public $satuan;
    public $harga_satuan;
    public $volume;
    public $hargas = [
        'total_harga'
    ];
    public $updateMode=false;
    public $inputs=[];
    public $i=1;
    
    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;        
    }

    public function sumColumn($columnName)
    {
        $this->hargas[$columnName] = array_reduce($this->inputs, function($total, $item) 
        use ($columnName) {
            $total += (int)$item[$columnName];
            $pajak = $total * 0.11;
            $jumlah = $total + $pajak;
            return $jumlah;
        });
    }   


    public function addPekerjaan(){
        array_push($this->inputs , [
            "newid" => "",
            "kategori_ordered" => "",
            "item_ordered" => "",
            "satuan" => "",
            "harga_satuan" => "",
            "volume" => "",
            "harga" => "",
        ]);        
    }

    public function remove($i){
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->kategori_ordered='';
        $this->item_ordered='';
        $this->satuan='';
        $this->volume='';
        $this->harga_satuan='';
        $this->harga='';
    }

    
    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();        
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep==1){
            // $this->validate([
            //     'nomor_po' => 'required|string',
            //     'kontrak_induk' => 'required|string',
            //     'pekerjaan' => 'required|string',
            //     'lokasi' => 'required|string',
            //     'startDate' => 'required|string',
            //     'endDate' => 'required|string',
            //     'skk_id' => 'required|string',
            //     'prk_id' => 'required|string',            
            //     'pejabat' => 'required|string',            
            //     'pengawas' => 'required|string',            
            // ]);
        }
        // if($this->currentStep==2){
        //     // $this->validate([
        //     //     'kategori_ordered.0' => 'required',
        //     //     'item_ordered.0' => 'required',
        //     //     'satuan.0' => 'required',
        //     //     'harga_satuan.0' => 'required',
        //     //     'volume.0' => 'required',
        //     //     'harga.0' => 'required',
        //     //     'kategori_ordered.*' => 'required',
        //     //     'item_ordered.*' => 'required',
        //     //     'satuan.*' => 'required',
        //     //     'harga_satuan.*' => 'required',
        //     //     'volume.*' => 'required',
        //     //     'harga.*' => 'required',
        //     // ]);
        //     // $this->validate([
        //     //     'kategori_ordered.0.required' => 'Kategori field is required',
        //     //     'item_ordered.0.required' => 'Item field is required',
        //     //     'satuan.0.required' => 'Satuan field is required',
        //     //     'harga_satuan.0.required' => 'Harga Satuan field is required',
        //     //     'volume.0.required' => 'Volume field is required',
        //     //     'harga.0.required' => 'Harga field is required',
        //     //     'kategori_ordered.*.required' => 'Kategori field is required',
        //     //     'item_ordered.*.required' => 'Item field is required',
        //     //     'satuan.*.required' => 'Satuan field is required',
        //     //     'harga_satuan.*.required' => 'Harga Satuan field is required',
        //     //     'volume.*.required' => 'Volume field is required',
        //     //     'harga.*.required' => 'Harga field is required',
        //     // ]);
        // }
        // if($this->currentStep==2){
        //     $this->validate([
        //         'kategori' => 'required|string',
        //         'detail_pekerjaan' => 'required|string',
        //         'volume' => 'required|integer'
        //     ]);
        // }        
    }
    public function register()
    {
        // use Barryvdh\DomPDF\Facade\Pdf;
        $this->resetErrorBag();
        $rab_id = Str::random(10);
        $nama_rab = explode(' ', $this->pekerjaan);
        // foreach($this->orderpekerjaans as $orderpekerjaan){
        //     $nama_kontrak = $orderpekerjaan['nama_kontrak'];
        //     $item_ordered = $orderpekerjaan['item_ordered'];
        //     $volume = $orderpekerjaan['volume'];
        // }
        
        if (sizeof($nama_rab) > 1) {
            $rab_id = $nama_rab[0] . $rab_id . $nama_rab[sizeof($nama_rab) - 1] . $rab_id;
        } else {
            $rab_id = $nama_rab[0] . $rab_id;
        }
        // if($this->currentStep==2){
        //     $this->validate([                
        //         'isi_kontrak' => 'required|mimes:pdf|max:1024'
        //     ]);
        // } 
        
        // $nama_file = $this->isi_kontrak->getClientOriginalName();
        // $upload_kontrak = $this->isi_kontrak->storeAs('student_cvs', $nama_file);
                

        
        $values_rab = array(
            "rab_id"=>$rab_id,
            "nomor_po"=>$this->nomor_po,
            "nomor_kontrak_induk"=>$this->kontrak_induk,
            "nomor_skk"=>$this->skk_id,
            "nomor_prk"=>$this->prk_id,
            "pekerjaan"=>$this->pekerjaan,
            "lokasi"=>$this->lokasi,
            "startDate"=>$this->startDate,
            "endDate"=>$this->endDate,
            "direksi_pekerjaan"=>$this->pejabat,
            "pengawas_pekerjaan"=>$this->pengawas,
            "total_harga"=>$this->hargas['harga'],
            );        

        foreach($this->inputs as $key => $value){
            OrderedRab::create([
                "rab_id"=>$rab_id,      
                "kategori_ordered"=>$this->inputs[$key]['kategori_ordered'],
                "item_ordered"=>$this->inputs[$key]['item_ordered'],
                "satuan"=>$this->inputs[$key]['satuan'],
                "volume"=>$this->inputs[$key]['volume'],    
                "harga_satuan"=>$this->inputs[$key]['harga_satuan'],    
                "harga"=>$this->inputs[$key]['harga'],    
                // $nama_kontrak = $orderpekerjaan['nama_kontrak'];
                // $item_ordered = $orderpekerjaan['item_ordered'];
                // $volume = $orderpekerjaan['volume'];
            ]);                
        }                                   
            // $values_ordered = array(
            //     "rab_id"=>$rab_id,      
            //     "kategori_ordered"=>json_encode($this->orderpekerjaans[0]),
            //     "item_ordered"=>$item_ordered,
            //     "volume"=>$volume,        
            // );
            // rabs()->attach($orderpekerjaan['nama_kontrak'],
            //                 ['item_ordered' => $orderpekerjaan['item_ordered']],
            //                 ['volume' =>  $orderpekerjaan['volume']]);                                       
            
        // $this->inputs=[];
        // $this->resetInputFields();
        Rab::insert($values_rab);
        // $pdf = Pdf::loadView('pdf.kontrak', $values_pdf);
        // $pdf->download('kontrak.pdf');
        $this->currentStep=1;
        // $this->reset();                
    }
    
    public function render()
    {
        return view('livewire.buat-kontrak-khs', [
            'kontraks' => KontrakInduk::all(),
            'skks' => Skk::all(),
            'prks' => Prk::all(),
            'pejabats' => Pejabat::all(),
            'categories' => ItemRincianInduk::all(),
            'items' => RincianInduk::all(),
            'active1' => 'Buat KHS',
            'active' => 'KHS',        
        ]);
    }
}
