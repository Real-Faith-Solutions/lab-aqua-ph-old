<div class="col" style="display: none;" id="chem_form_1">
    <div class="card">
        <div class="card-header bg-primary">
            <span class="fs-4 fw-bold me-2 text-white">CHEM1 - pH</span>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Instrument Reading 1</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <div class="input-group mb-3">
                    <input class="form-control" type="number" name="reading_chem1_1"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Instrument Reading 2</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <div class="input-group mb-3">
                    <input class="form-control" type="number" name="reading_chem1_2"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Instrument Reading 3</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <div class="input-group mb-3">
                    <input class="form-control" type="number" name="reading_chem1_3"/>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Average Instrument Reading</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <div class="input-group mb-3">
                    <input class="form-control" type="text" readonly/>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Final Result</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <div class="input-group mb-3">
                    <input class="form-control" name="chem1_final" type="text" onchange="chem1()"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Final Result Remarks</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <div class="input-group mb-3">
                    <input class="form-control" name="chem1_remarks" type="text" readonly/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col" style="display: none;" id="chem_form_2">
    <div class="card">
        <div class="card-header bg-primary">
            <span class="fs-4 fw-bold me-2 text-white">CHEM2 - Nitrate</span>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Instrument Reading 1</h6>
                </div>
                <div class="col-sm-9 text-secondary input-group mb-3">
                    <input class="form-control" type="number" name="reading_chem2_1" />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Instrument Reading 2</h6>
                </div>
                <div class="col-sm-9 text-secondary input-group mb-3">
                    <input class="form-control" type="number" name="reading_chem2_2"/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Instrument Reading 3</h6>
                </div>
                <div class="col-sm-9 text-secondary input-group mb-3">
                    <input class="form-control" type="number" name="reading_chem2_3"/>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Average Instrument Reading</h6>
                </div>
                <div class="col-sm-9 text-secondary input-group mb-3">
                    <input class="form-control" type="text"  readonly/>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Final Result</h6>
                </div>
                <div class="col-sm-9 text-secondary input-group mb-3">
                    <input class="form-control" type="number" name="chem2_result" onchange="chem2()"/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Final Result Remarks</h6>
                </div>
                <div class="col-sm-9 text-secondary input-group mb-3">
                    <input class="form-control" type="text" name="chem2_remarks" readonly/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col" style="display: none;" id="chem_form_3">
    <div class="card">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM3 - Total Dissolved Solids</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Initial Wt. of Evaporating Dish Replicate 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="iwoedr1_chem3"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Wt. of Evaporating Dish Replicate 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="fwoedr1_chem3"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Wt. of Residue Replicate 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="worr1_chem3"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Initial Wt. of Evaporating Dish Replicate 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="iwofedr2_chem3"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Wt. of Evaporating Dish Replicate 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="fwofedr2_chem3"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Wt.of Residue Replicate 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="worr2_chem3"/>
            </div>
        </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Average Wt. of Residue</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" readonly/>
            </div>
        </div>
        </div> --}}

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="chem3_result" onchange="chem3()"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result Remarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem3_remarks" readonly/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col" style="display: none;" id="chem_form_4">
    <div class="card">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM4 - Chlorine (Residual), as free</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number"  name="ir_chem4"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" name="chem4_result" type="number" onchange="chem4()"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result Remarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem4_remarks" readonly/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col" style="display: none;" id="chem_form_5">
    <div class="card">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM5 - Arsenic</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="ir1_chem5" />
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="ir2_chem5"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 3</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="ir3_chem5"/>
            </div>
        </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Average Instrument Reading</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" readonly/>
            </div>
        </div>
        </div> --}}

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="chem5_result" />
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result Remarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem5_remarks" readonly/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col" style="display: none;" id="chem_form_6">
    <div class="card">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM6 - Cadmium</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="ir1_chem6"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="ir2_chem6"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 3</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="ir3_chem6"/>
            </div>
        </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Average Instrument Reading</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" readonly/>
            </div>
        </div>
        </div> --}}

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="number" name="chem6_result"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result Remarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem6_remarks" readonly/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col" style="display: none;" id="chem_form_7">
    <div class="card">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM7 - Lead</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir1_chem7"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir2_chem7"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 3</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir3_chem7"/>
            </div>
        </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Average Instrument Reading</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" />
            </div>
        </div>
        </div> --}}

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem7_result"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">RemarksRemarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem7_remarks"/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col-6" style="display: none;" id="chem_form_9">
    <div class="card m-4">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM9 - Iron</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir1_chem9"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir2_chem9"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 3</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir3_chem9"/>
            </div>
        </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Average Instrument Reading</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" />
            </div>
        </div>
        </div> --}}

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem9_result"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Remarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem9_remarks"/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col-6" style="display: none;" id="chem_form_10">
    <div class="card m-4">
    <div class="card-header bg-primary">
        <span class="fs-4 fw-bold me-2 text-white">CHEM10 - Manganese</span>
    </div>

    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 1</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir1_chem10"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 2</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir2_chem10"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Instrument Reading 3</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="ir3_chem10"/>
            </div>
        </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Average Instrument Reading</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" />
            </div>
        </div>
        </div> --}}

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Final Result</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem10_result"/>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Remarks</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <div class="input-group mb-3">
            <input class="form-control" type="text" name="chem10_remarks"/>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
