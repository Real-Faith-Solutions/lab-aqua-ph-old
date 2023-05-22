<div class="col" style="display: none;" id="micr_form_1">
    <div class="card">
      <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">MICR1 - Heterotrophic Plate Count (HPC)</span>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Plate A Colony Count</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr1_hpc_a" type="number"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Plate B Colony Count</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr1_hpc_b" type="number"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Average Colony Count</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr1_hpc_ave" type="number" readonly required/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">% Difference</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr1_hpc_diff" type="number" readonly required/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr1_hpc_value" type="text" readonly required/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Remarks</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr1_hpc_remarks" type="text" readonly required/>
              {{-- <select class="form-control" name="mcr1_hpc_remarks">
                <option>PASS</option>
                <option>FAIL</option>
              </select> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="col" style="display: none;" id="micr_form_2">
    <div class="card">
        <div class="card-header bg-primary">
          <span class="fs-4 fw-bold me-2 text-white">MICR2 - Thermotolerant Coliform Test</span>
        </div>
  
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</h6><br>
            </div>
            <div class="col-sm-9 text-secondary">
              <div class="input-group mb-3">
                <input class="form-control" name="mcr2_bg_24h" type="number"/>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">
              No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h
            </h6>
            <br>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr2_bg_48h" type="number"  />
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">
              No. of EC Broth tubes with (+) rxn after 24h
            </h6>
            
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="micr2_fc_24h" type="number"  onchange="micro2ComputationA()" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" type="text" name="micr2_fc_total" readonly required/>
            </div>
          </div>
        </div>                

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Remarks</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" type="text" name="mcr2_tc_remarks" readonly required/>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="col" style="display: none;" id="micr_form_3">
    <div class="card">
      <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">MICR3 - Total Coliform</span>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</h6><br>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr2_bg_24h" type="number"/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">
              No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h
            </h6>
            <br>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr2_bg_48h" type="number"  />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">
              No. of Lauryl Tryptose Broth tube with (+) rxn after 24h
            </h6>
            <br>
          </div>          
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" type="text" name="micr3_tc_24h" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">
              No. of Lauryl Tryptose Broth tube with (+) rxn after 48h
            </h6>
            <br>
          </div>          
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" type="text" name="mcr3_tc_48h" onchange="micro3Computation()" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" type="text" name="mcr3_tc_total" readonly required/>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Remarks</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" type="text" name="mcr3_tc_remarks" readonly required/>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="col" style="display: none;" id="micr_form_4">
    <div class="card">
      <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">MICR4 - E. coli Test</span>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Color of the sample</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <select class="form-control" name="color_of_the_sample">
                <option value="Faint yellow">Faint yellow</option>
                <option value="Intense yellow">Intense yellow</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Fluorescence</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <select class="form-control" name="fluorescence">
                <option value="Fluorescent">Fluorescent</option>
                <option value="Non-fluorescent">Non-fluorescent</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <select class="form-control" name="micr4_results" onchange="micro4Computation()">                
                <option disabled selected>-</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Final result remarks</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
              <input class="form-control" name="mcr4_remarks" readonly required/>
            </div>
          </div>
        </div>        
      </div>
    </div>
</div>
