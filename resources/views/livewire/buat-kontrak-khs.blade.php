<div>    
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">                
                    <div class="tab-content">
                        <form wire:submit.prevent="register">
                            @csrf
                            @if($currentStep==1)
                            <div id="wizard_Service" class="tab-pane" role="tabpanel">                                    
                                <div class="row">
                                    <div class="card-inline">
                                        <div class="card-header justify-content-center">
                                            <h4 class="card-title">Step 1</h4>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">No. Purchase Order(PO)</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="nomor_po" id="nomor_po" placeholder="No. PO" required
                                                        wire:model="nomor_po">
                                                    <span class="text-danger">@error('nomor_po'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Pilih No. Kontrak Induk</label>
                                                    <select class="form-control input-default" id="kontrak_induk" name="kontrak_induk" required wire:model="kontrak_induk">
                                                        <option value="">No. Kontrak Induk</option>
                                                        @foreach ($kontraks as $kontrak)
                                                            <option value="{{ $kontrak->nomor_kontrak_induk }}">{{ $kontrak->nomor_kontrak_induk }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">@error('kontrak_induk'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Nama Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" required wire:model="pekerjaan">                                                    
                                                    <span class="text-danger">@error('pekerjaan'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Input Lokasi</label>
                                                    <input type="text" class="form-control" placeholder="Lokasi" name="lokasi" id="lokasi" required wire:model="lokasi">                                                    
                                                    <span class="text-danger">@error('lokasi'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <div wire:ignore class="form-group">
                                                        <label class="text-label">Start Date</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="startDate" id="startDate" placeholder="Start Date" required
                                                            wire:model="startDate">
                                                        <span class="text-danger">@error('startDate'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">End Date</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="endDate" id="endDate" placeholder="End Date" required
                                                        wire:model="endDate">
                                                    <span class="text-danger">@error('endDate'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Input No.SKK</label>
                                                    <select class="form-control input-default" id="skk_id" name="skk_id" wire:model="skk_id">
                                                        <option value="">Pilih No. SKK</option>  
                                                    @foreach($skks as $skk)
                                                        <option value="{{$skk -> nomor_skk}}">{{$skk->nomor_skk}}</option>
                                                    @endforeach
                                                    </select>
                                                    <span class="text-danger">@error('no_skk'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Input No.PRK</label>
                                                    <select class="form-control input-default" id="prk_id" name="prk_id" wire:model="prk_id">
                                                        <option value="">Pilih PRK</option>
                                                    @foreach($prks as $prk)
                                                        <option value="{{$prk -> no_prk}}">{{$prk->no_prk}}</option>
                                                    @endforeach                                                    
                                                    </select>
                                                    <span class="text-danger">@error('no_prk'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Pilih Direksi Pekerjaan</label>
                                                    <select class="form-control input-default" id="pejabat"
                                                        name="pejabat" required wire:model="pejabat">
                                                        <option value="">Direksi Pekerjaan</option>
                                                        @foreach ($pejabats as $pejabat)
                                                            <option value="{{ $pejabat->nama_pejabat }}">{{ $pejabat->nama_pejabat }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">@error('pejabat'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Input Pengawas Pekerjaan</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="pengawas" id="pengawas" placeholder="Pengawas Pekerjaan" required
                                                        wire:model="pengawas">
                                                    <span class="text-danger">@error('pengawas'){{$message}}@enderror</span>
                                                </div>
                                            </div>                                                                                                                        
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                            @endif
                            @if($currentStep==2)
                            <div id="wizard_Details" class="tab-pane" role="tabpanel">
								<div class="row">
                                    <div class="card">                                        
                                        <div class="card-header justify-content-center">
                                            <h4 class="card-title">Input Jenis Pekerjaan</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-row">                                                
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-sm height-100" id="tabelRAB">
                                                        <thead>
                                                            <tr>
                                                                <th>Kategori Pekerjaan</th>
                                                                <th>Pekerjaan</th>
                                                                <th>Satuan</th>
                                                                <th>Harga Satuan</th>
                                                                <th>Volume</th>
                                                                <th>Harga</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody-kategori">
                                                            {{-- <tr id="baris-kategori" name="baris-kategori">                                                                
                                                                <td>
                                                                    <select class="form-control input-default"
                                                                        name="kategori" wire:model="kategori_ordered.0">
                                                                        <option value="">Pilih Kategori</option>
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">{{ $category->nama_kategori }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>                                                                    
                                                                </td>
                                                                <td>
                                                                    <select class="form-control input-default" name="item_id" wire:model="item_ordered.0">
                                                                        <option value="">Pilih Pekerjaan</option>
                                                                        @foreach ($items as $item)
                                                                            <option value="{{ $item->nama_item }}">{{ $item->nama_item }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                    class="form-control"
                                                                    name="satuan" placeholder="satuan" wire:model="satuan.0">
                                                                    @error('satuan')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                    class="form-control"
                                                                    name="harga_satuan" placeholder="harga_satuan" wire:model="harga_satuan.0">
                                                                    @error('harga_satuan')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </td>
                                                                <td>
                                                                    <input type="number"
                                                                        class="form-control"
                                                                        name="volume" placeholder="Volume" wire:model="volume.0">
                                                                    @error('volume')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror</td>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        name="harga" placeholder="harga" wire:model.defer="harga.0">
                                                                    @error('harga')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </td>                                                                    
                                                            </tr> --}}
                                                            @foreach($inputs as $key => $value)
                                                            <tr id="baris-kategori" name="baris-kategori">
                                                                <td>
                                                                    <select class="form-control input-default"
                                                                        name="kategory_id" wire:model="inputs.{{$key}}.kategori_ordered">
                                                                        <option value="">Pilih Kategori</option>
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->nama_kategori }}">{{ $category->nama_kategori }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>                                                                    
                                                                </td>
                                                                <td>
                                                                    <select class="form-control input-default" name="item_id" wire:model="inputs.{{$key}}.item_ordered">
                                                                        <option value="">Pilih Pekerjaan</option>
                                                                        @foreach ($items as $item)
                                                                            <option value="{{ $item->nama_item }}">{{ $item->nama_item }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                    class="form-control"
                                                                    name="satuan" placeholder="satuan" wire:model="inputs.{{$key}}.satuan">
                                                                    @error('satuan')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                    class="form-control"
                                                                    name="harga_satuan" placeholder="harga_satuan" wire:model="inputs.{{$key}}.harga_satuan">
                                                                    @error('harga_satuan')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </td>
                                                                <td>
                                                                    <input type="number"
                                                                        class="form-control"
                                                                        name="volume" placeholder="Volume" wire:model="inputs.{{$key}}.volume">
                                                                    @error('volume')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror</td>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        name="harga" placeholder="harga" wire:model="inputs.{{$key}}.harga" wire:keyup="sumColumn('harga')">                                                                                                                     
                                                                </td>    
                                                                <td><button class="btn btn-primary position-relative justify-content-end" wire:click.prevent="remove({{$key}})">Delete</button></td>
                                                            </tr>  
                                                            @endforeach  
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th id="jumlah">Jumlah</th>
                                                                @foreach ($hargas as $harga)
                                                                <th>
                                                                    @if(isset($hargas['harga']))
                                                                        {{$hargas['harga']}}
                                                                    @endif
                                                                </th>                                                                    
                                                                @endforeach
                                                                </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th id="pajak">PPN 11%</th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th id="total">Total Harga</th>
                                                                <th></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                    <div class="col-lg-12 mb-2">
                                                        <div class="position-relative justify-content-end float-left">
                                                            <a type="button" id="tambah-pekerjaan"
                                                                class="btn btn-primary position-relative justify-content-end" 
                                                                wire:click.prevent="addPekerjaan()">Tambah</a>
                                                        </div>
                                                    </div>
                                                </div>                                                                              
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div> 
                            @endif

                            {{-- @if($currentStep==3)
                            <div id="wizard_Item" class="tab-pane2" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12 col-xxl-12">
                                        <div class="card">
                                            <div class="card-header justify-content-center">
                                                <h4 class="card-title">RAB</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="wire:ignore">
                                                    <textarea  type="text" input="description" id="description" class="form-control" wire:model="description">

                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif                                                         --}}
                            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                                @if($currentStep==1)                                        
                                <div></div>        
                                <button type="button" class="btn btn-md btn-primary" wire:click="increaseStep()">Next</button>
                                @endif
                                
                                {{-- @if($currentStep==2 || $currentStep==3)
                                    @endif
                                
                                    @if($currentStep==1 || $currentStep==2)                                
                                    
                                    @endif
                                    --}}
                                @if($currentStep==2)
                                <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</button>                                                                            
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>                                        
                                @endif
                            </div>                                       
                        </form>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>



