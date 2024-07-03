<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" onsubmit="return validate()">
                    <h4>
                        <span class="design_dot"></span>
                        BOOK APPOINTMENT
                    </h4>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="frmname">Patient Name </label>
                            <input type="text" class="form-control" placeholder=""  id="frmname" name="frmname" onkeypress="return nameonly(event)">
                            <span id="frmnameerror" class="error"></span>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="frmdoctorname">Doctor's Name</label>
                            <select class="form-control wide" id="frmdoctorname" name="frmdoctorname">
                                <option value="">select doctor name</option>
                                <option value="Normal distribution ">Doctor Name 1</option>
                                <option value="Normal distribution ">Doctor Name 2 </option>
                                <option value="Normal distribution ">Doctor Name 3 </option>
                            </select>
                            <div><span id="frmdoctorerror" class="error"></span></div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="frmdepartmentname">Department's Name</label>
                            <select name="frmdepartmentname" class="form-control wide" id="frmdepartmentname">
                                <option value="">select Department name</option>
                                <option value="Normal distribution ">Cardiology </option>
                                <option value="Normal distribution ">Surgery </option>
                                <option value="Normal distribution ">First Aid </option>
                            </select>
                            <span id="frmnameerror" class="error"></span>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="frmphone">Phone Number</label>
                            <input type="text" class="form-control" id="frmphone" placeholder="" name="frmphone" onkeypress="return phonevalidate(event)">
                            <span id="frmphoneerror" class="error"></span>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="frmsymptoms">Symptoms</label>
                            <input type="text" class="form-control" id="frmsymptoms" placeholder="" name="frmsymptoms">
                            <span id="frmnameerror" class="error"></span>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date </label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy" name="frmdate">
                                <input type="text" class="form-control" readonly>
                                <span class="input-group-addon date_icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                            <span id="frmnameerror" class="error"></span>
                        </div>
                    </div>
                    <div class="btn-box">
                        <input type="submit" class="btn " value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>