
<div class="form">
    <h1>Registration Form</h1>
    <form action="php/connect/insert-data.php" method="POST">
        <div class="slider">
            <div class="personal-info">
                <div class="name">
                    <div>
                        <input type="text" placeholder="First name" name="firstName">
                    </div>
                    <div>
                        <input type="text" placeholder="Middle name" name="middleName">
                    </div>
                    <div>
                        <input type="text" placeholder="Last name" name="lastName">    
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email">    
                    </div>
                </div>    
                <div class="drop-down">
                    <select class="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>    
                    <select class="status" name="status">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Engaged</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                        <option>Complicated</option>
                    </select>    
                </div>    
                <div class="birthday">
                    <input type="date" name="birthday">
                </div>
                <div class="registration-btn">
                    <button type="button" class="r-back-btn" onclick="onRBackButtonClick()" onmouseover="onRBackHover()" onmouseout="onRBackUnhover()">Back</button>
                    <button type="button" class="r-next-btn" onclick="onRNextButtonClick()" onmouseover="onRNextHover()">Next</button>
                </div>
            </div>
            <div class="part-2">
                <div class="additional-info">
                    <input type="text" placeholder="Occupation" name="occupation">
                    <input type="text" placeholder="Nationality" name="nationality">
                    <input type="text" placeholder="Religion" name="religion">
                    <input type="number" placeholder="Contact number" name="contactNumber">
                    <div class="height-and-weight">
                        <input type="number" placeholder="Height" name="height">
                        <input type="number" placeholder="Weight" name="weight">
                        <input type="number" placeholder="Temperature" name="temperature">
                    </div>
                    <input type="text" placeholder="Allergies" name="allergies">
                </div>
                <div class="registration-btn-2">
                    <button type="button" class="r2-back-btn" onclick="onR2BackButtonClick()" onmouseover="onR2BackHover()" onmouseout="onR2BackUnhover()">Back</button>
                    <button type="button" class="r2-next-btn" onclick="onR2NextButtonClick()" onmouseover="onR2NextHover()">Next</button>
                </div>
            </div>
            <div>
            <div class="vaccination-details">
                <div class="vaccine-brand">
                    <h3>What brand of vaccine do you want?</h3>
                    <select class="vaccine-brand" name="vaccineBrand">
                        <option>Moderna</option>
                        <option>Sinovac</option>
                        <option>Pfizer</option>
                        <option>AstraZeneca</option>
                        <option>Sinopharm</option>
                    </select>
                </div>
                <div class="schedule">
                    <h3>Choose your schedule</h3>
                    <select class="schedule" name="schedule">
                        <option>2022-03-10</option>
                        <option>2022-03-11</option>
                        <option>2022-03-12</option>
                        <option>2022-03-13</option>
                        <option>2022-03-14</option>
                        <option>2022-03-15</option>
                        <option>2022-03-16</option>
                        <option>2022-03-17</option>
                        <option>2022-03-18</option>
                        <option>2022-03-19</option>
                        <option>2022-03-20</option>
                    </select>
                </div>
                <div class="registration-btn-3">
                    <button type="button" class="r3-back-btn" onclick="onR3BackButtonClick()" onmouseover="onR3BackHover()" onmouseout="onR3BackUnhover()">Back</button>
                    <button class="r3-submit-btn"  onmouseover="onR3SubmitHover()"  onmouseout="onR3SubmitUnhover()">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
