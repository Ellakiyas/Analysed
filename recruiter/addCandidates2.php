<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<title>Analysed</title>
<div class="container">
<div class="bread-crumbs_Mytools-recruiter">
        <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add candidates</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Candidate</h1>
            <p class="mainParaDash">Please enter the details of the new candidates</p>
        </div>
        <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button>
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="" class="active">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/mortarboard.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Professional information</h2>
                </div>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Current Title*</label>
                                        <input type="text" name="companyname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Company Name*</label>
                                        <input type="text" name="companyname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 right-side fx-city-name-1">
                                        <label for="default-select-for-no1 ">Candidate Type*</label>
                                        <select name="status" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                            <option value="0" default>Select Status</option>
                                            <option value="1">Open</option>
                                            <option value="2">Closed</option>
                                            <option value="3">Working</option>
                                        </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1"> 
                                        <label for="default-select-for-no.3">Employment Preference*</label>
                                            <select name="Industry" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1"> 
                                        <label for="default-select-for-no.3">Source*</label>
                                            <select name="Industry" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1"> 
                                        <label for="default-select-for-no.3">Recruiter*</label>
                                            <select name="Industry" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>

                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 ">
                                        <label for="default-input-for-no.2">Current Salary*</label>
                                        <input type="text" name="cURL" class="default-input-for-add-client-1" placeholder="Company URL" id="default-input-for-no.2">
                                    </p>
                                    <span class="input-para-add-client-ekam-1 desired-salary-p">
                                        <label for="default-input-for-no.2">Desired Salary Range*</label>
                                        <span class="row-recruiter">
                                            <input type="text" name="cURL" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2"> to
                                            <input type="text" name="cURL" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2">
                                        </span>
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
</div>
