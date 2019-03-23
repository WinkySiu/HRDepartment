@extends('layout.form_app')

@section('content')

<div class="container">
  <div class="form-detail">
    <h2>HR Department Example</h2>
    <hr>
    <h6>Description</h6>
    <p>
      1.	Staff age and gender distribution<br>
      2.	New Employees Hires<br>
      3.	Turnover Rate<br>
      4.  Benefits<br>
      5.  Training and Educaiton
    </p>
  </div>
  <hr>
  <div class="form-question">
    <div class="section">
      <h4>1.  Staff age and gender distribution</h4>
    </div>

    <!-- <div class="question">
      <h5>Number of Managerial (e.g. CEO, Directors, Manager)<span class="must">*</span></h5>
      <span>Male: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Female: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Number of Officer (i.e., non-managerial staff members working at head office, e.g. Secretary, HR Officer, Designer, Admin, Coordinator, etc.)<span class="must">*</span></h5>
      <span>Male: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Female: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Number of Frontline Operations (e.g. F&B waitress, courier persons, cleaners/housekeepers, drivers, etc.)<span class="must">*</span></h5>
      <span>Male: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Female: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div> -->

    <div class="question">
      <h5>Number of Frontline Operations (e.g. F&B waitress, courier persons, cleaners/housekeepers, drivers, etc.)<span class="must">*</span></h5>
      <table class="table">
        <thead>
          <tr>
            <th class="col-title" rowspan="2"></th>
            <th class="col-title" colspan="2">By Gender</th>
            <th class="col-title" colspan="2">By Age</th>

          </tr>
          <tr>
            <th class="col-title" scope="col">Male</th>
            <th class="col-title" scope="col">Female</th>
            <th class="col-title" scope="col"><40</th>
            <th class="col-title" scope="col">>=40</th>
            <th class="col-title" rowspan="1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Managerial level</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
          <tr>
            <th scope="row">Officer</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
          <tr>
            <th scope="row">Frontline Operations</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>
  </div>

  <div class="form-question">
    <div class="section">
      <h4>2.  New employees hires and turnover rate</h4>
    </div>

    <div class="question">
      <h5>Number of Frontline Operations (e.g. F&B waitress, courier persons, cleaners/housekeepers, drivers, etc.)<span class="must">*</span></h5>
      <table class="table">
        <thead>
          <tr>
            <th class="col-title" scope="col"></th>
            <th class="col-title" scope="col">Male</th>
            <th class="col-title" scope="col">Female</th>
            <th class="col-title" scope="col"><= aged 40</th>
            <th class="col-title" scope="col">> aged 40</th>
            <th class="col-title" rowspan="1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Number of new employees</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
          <tr>
            <th scope="row">No. of staff resigned during the year</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
          <tr>
            <th scope="row">Total no. of staff at the beginning of the year</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
          <tr>
            <th scope="row">Total no. of staff at the end of the year</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
          <tr>
            <th scope="row">Staff turnover rate</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0</b></td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>

    <!-- <div class="question">
      <h5>Number of new employees:<span class="must">*</span></h5>
      <input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Number of new employees<span class="must">*</span></h5>
      <span>Male: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Female: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Age of new employee<span class="must">*</span></h5>
      <span>Aged 40 or below: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Aged 40 or above: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div> -->
  </div>

  <!-- <div class="form-question">
    <div class="section">
      <h4>3.  Turnover Rate</h4>
    </div>

    <div class="question">
      <h5>No. of staff resigned during the year<span class="must">*</span></h5>
      <span>Male: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Female: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Total no. of staff at the beginning of the year<span class="must">*</span></h5>
      <input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Staff turnover rate for male and female:<span class="must">*</span></h5>
      <span>Male: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Female: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Staff turnover rate for staff aged equal to or below 40 and above 40:<span class="must">*</span></h5>
      <span>below 40: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>above 40: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>
  </div> -->

  <div class="form-question">
    <div class="section">
      <h4>3.  Benefits</h4>
    </div>
    <div class="question">
      <h5>Percentage of employees receiving regular performance and career development reviews.<span class="must">*</span></h5>
      <table class="table">
        <thead>
          <tr>
            <th class="col-title" scope="col">Benefit item</th>
            <th class="col-title" scope="col">Y/N</th>
            <th class="col-title" scope="col">% of total staff cost.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Medical and Life Insurance Scheme</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-1" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-1')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-1" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-1')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number1" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Annual leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-2" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-2')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-2" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-2')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number2" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Sick Leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-3" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-3')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-3" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-3')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number3" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Compassionate leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-4" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-4')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-4" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-4')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number4" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Marriage leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-5" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-5')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-5" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-5')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number5" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Jury Service Leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-6" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-6')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-6" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-6')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number6" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Maternity leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-7" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-7')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-7" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-7')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number7" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Study leave</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-8" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-8')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-8" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-8')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number8" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Pension fund</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-9" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-9')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-9" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-9')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number9" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Study subsidy</th>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-10" id="inlineRadio1" value="Yes" onclick="number_disable('inlineRadioOptions-10')">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-10" id="inlineRadio2" value="No" onclick="number_disable('inlineRadioOptions-10')">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            <td class="text-center"><input type="number" name="number10" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Other</th>
            <td><input type="text" class＝"short-answer"></td>
            <td class="text-center"><input type="number" name="" min="1" max="100" value="0" class＝"short-answer"></td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>



    <!-- <div class="question">
      <h5>Study subsidy. % of total staff cost.<span class="must">*</span></h5>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="no" checked>
        <label class="form-check-label" for="exampleRadios1">
          No
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="yes">
        <label class="form-check-label" for="exampleRadios2">
          Yes : <span id="sliderValue">50</span>%
        </label>
      </div>
      <div class="form-group">
        <input type="range" id="sliderInput" class="form-control-range" onInput="slider1Change(this.value)" min="1" disabled>
      </div>
      <hr>
    </div> -->

  </div>

  <div class="form-question">
    <div class="section">
      <h4>4.  Training and Educaiton</h4>
    </div>

    <div class="question">
      <h5>Number of Frontline Operations (e.g. F&B waitress, courier persons, cleaners/housekeepers, drivers, etc.)<span class="must">*</span></h5>
      <table class="table">
        <thead>
          <tr>
            <th class="col-title" scope="col"></th>
            <th class="col-title" scope="col">Male</th>
            <th class="col-title" scope="col">Female</th>
            <th class="col-title" scope="col">% Male</th>
            <th class="col-title" scope="col">% Female</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Managerial level</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0%</b></td>
            <td><b>0%</b></td>
          </tr>
          <tr>
            <th scope="row">Officer</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0%</b></td>
            <td><b>0%</b></td>
          </tr>
          <tr>
            <th scope="row">Frontline Operations</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0%</b></td>
            <td><b>0%</b></td>
          </tr>
          <tr>
            <th scope="row">Cost spent on Training and Education</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><b>0%</b></td>
            <td><b>0%</b></td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>



    <!-- <div class="question">
      <h5>Average hours of training per year by Position Level：<span class="must">*</span></h5>
      <span>Managerial level: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Officer’s level: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Average hours of training per year by Gender：<span class="must">*</span></h5>
      <span>Managerial level: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <br>
      <span>Officer’s level: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Overall average hours of training：<span class="must">*</span></h5>
      <span>Hours: </span><input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div>

    <div class="question">
      <h5>Percentage of employees receiving regular performance and career development reviews.<span class="must">*</span></h5>
      <table class="table">
        <thead>
          <tr>
            <th class="col-title" scope="col"></th>
            <th class="col-title" scope="col">Male</th>
            <th class="col-title" scope="col">Female</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Managerial level</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Officer</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
          </tr>
          <tr>
            <th scope="row">Frontline Operations</th>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
            <td><input type="number" name="" min="0" max="100" value="0" class＝"short-answer"></td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>

    <div class="question">
      <h5>Cost spent on Training and Education<span class="must">*</span></h5>
      <input type="number" name="" min="0" value="0" class＝"short-answer">
      <hr>
    </div> -->
  </div>

  <div class="form_confirm text-center">
    <hr>
    <div class="form_btn">
      <button type="button" id="finish-btn" class="btn btn-success" style="margin-left:10px;margin-right:10px;">完 成</button>
      <button type="button" class="btn btn-light" style="margin-left:10px;margin-right:10px;">重 設</button>
    </div>
  </div>

</div>

<style media="screen">
  body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(./img/test.png);
    background-repeat: no-repeat;
    background-size: 100vw auto;
    background-position: center center;
  }

  .container {
    width: 80%;
    padding: 0 0 100px 0;
    background-color: white;
    height: 100vh;
    box-shadow: 2px 2px 10px gray;
    overflow: scroll;
  }

  .form-detail {
    width: 100%;
    padding: 50px 10% 10px 10%;
    /* background-color: #3399ff; */
  }

  .form-question {
    width: 100%;
  }

  .form-question .section{
    background-color: lightgray;
    width: 100%;
    padding: 40px 10% 30px 10%;
  }

  h1, h2, h3, h4, h5, h6{
    font-weight: bold;
  }

  .form-detail h6 {
    color: darkgray;
  }

  input {
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    margin-top: 15px;
    border-bottom: 2px solid #dfdfdf;
  }

  *:focus {
    outline: none;
    border-bottom: 2px solid gray;
  }

  .question {
    width: 100%;
    padding: 40px 10% 0px 10%;
  }

  .question hr {
    margin-top: 40px;
  }

  .must {
    color: red;
  }

  .form_confirm, .form_confirm .form_btn {
    padding-top: 20px;
  }

  .long-answer input{
    width: 80%;
  }

  input[type="checkbox"], input[type="radio"] {
    margin-right: 10px;
  }

  td input {
    margin-top: 0;
  }

  .table .col-title{
    margin-top: 15px;
    border-top: 0px;
  }

</style>
<script type="text/javascript">
  $(document).ready(function() {
    document.title = 'HR Department Example';
  });

  function slider1Change(val){
    document.getElementById('sliderValue').innerHTML = val;
  }

  $(function() {
    $("input[name = 'exampleRadios']").click(function(){
      var value = $("input[name = 'exampleRadios']:checked").val()
      if (value == "yes") {
        $("#sliderInput").prop("disabled", false);
      }
      else {
        $("#sliderInput").prop("disabled", true);
      }
    });
  })

  $("#finish-btn").click(function(){
      window.close();
  });

  function number_disable(name){
    var value = $("input[name = '" + name + "']:checked").val()
    var name_split = name.split("-");
    if (value == "Yes") {
      $("input[name = 'number" + name_split[1] + "']").prop("disabled", false);
      console.log("#number" + name_split[1]);
    }
    else if (value == "No"){
      $("input[name = 'number" + name_split[1] + "']").prop("disabled", true);
      console.log("#number" + name_split[1]);
    }
  }
</script>

@endsection



    <!-- <div class="question">
      <h5>Medical and Life Insurance Scheme.<span class="must">*</span></h5>
      <div class="long-answer">
        <input type="text" name="" value="" placeholder="詳細回答">
      </div>
      <hr>
    </div>

    <div class="question">
      <h5>Medical and Life Insurance Scheme.<span class="must">*</span></h5>
      <input type="text" name="" value="" placeholder="簡短回答">
      <hr>
    </div>

    <div class="question">
      <h5>Medical and Life Insurance Scheme.<span class="must">*</span></h5>
      <div>
        <input type="checkbox" name="" value=""> Yes
      </div>
      <div>
        <input type="checkbox" name="" value=""> No
      </div>
      <div>
        <input type="checkbox" name="" value=""> <input type="text" name="" value="" placeholder="其他">
      </div>
      <hr>
    </div>-->
