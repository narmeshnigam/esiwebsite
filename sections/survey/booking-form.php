<section class="survey-booking-form" id="booking-form">
    <div class="container">
        <div class="form-header">
            <h2>Schedule Your Site Visit</h2>
            <p>Fill in the details below and our team will contact you within 24 hours to confirm your survey appointment.</p>
        </div>
        
        <div class="booking-form-container">
            <form class="booking-form" id="booking-form-main" method="POST" action="/submit-survey-booking.php" enctype="multipart/form-data">
                <div class="form-grid">
                <!-- Contact Details -->
                <div class="form-section">
                    <h3>Contact Details</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="survey_name">Full Name *</label>
                            <input type="text" id="survey_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="survey_company">Company Name</label>
                            <input type="text" id="survey_company" name="company">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="survey_email">Email Address *</label>
                            <input type="email" id="survey_email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="survey_phone">Phone Number *</label>
                            <input type="tel" id="survey_phone" name="phone" required>
                        </div>
                    </div>
                </div>

                <!-- Site Information -->
                <div class="form-section">
                    <h3>Site Information</h3>
                    <div class="form-group">
                        <label for="survey_address">Site Address *</label>
                        <textarea id="survey_address" name="address" rows="3" required placeholder="Enter complete site address"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="survey_city">City *</label>
                            <select id="survey_city" name="city" required>
                                <option value="">Select city</option>
                                <option value="delhi">Delhi</option>
                                <option value="gurugram">Gurugram</option>
                                <option value="noida">Noida</option>
                                <option value="faridabad">Faridabad</option>
                                <option value="ghaziabad">Ghaziabad</option>
                                <option value="mumbai">Mumbai</option>
                                <option value="pune">Pune</option>
                                <option value="hyderabad">Hyderabad</option>
                                <option value="bengaluru">Bengaluru</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="survey_facility_type">Type of Facility *</label>
                            <select id="survey_facility_type" name="facility_type" required>
                                <option value="">Select facility type</option>
                                <option value="industrial">Industrial</option>
                                <option value="commercial">Commercial</option>
                                <option value="residential">Residential</option>
                                <option value="institutional">Institutional</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="educational">Educational</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="survey_load">Load Size (kVA)</label>
                            <input type="number" id="survey_load" name="load_size" placeholder="e.g., 500">
                        </div>
                        <div class="form-group">
                            <label for="survey_area">Area (sq. ft.)</label>
                            <input type="number" id="survey_area" name="area" placeholder="e.g., 10000">
                        </div>
                    </div>
                </div>

                <!-- Visit Scheduling -->
                <div class="form-section">
                    <h3>Preferred Visit Date &amp; Time</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="survey_date">Preferred Date *</label>
                            <input type="date" id="survey_date" name="preferred_date" required>
                            <small>We offer 3‑day flexibility from your selected date</small>
                        </div>
                        <div class="form-group">
                            <label for="survey_time">Preferred Time *</label>
                            <select id="survey_time" name="preferred_time" required>
                                <option value="">Select time slot</option>
                                <option value="morning">Morning (9:00 AM - 12:00 PM)</option>
                                <option value="afternoon">Afternoon (12:00 PM - 4:00 PM)</option>
                                <option value="evening">Evening (4:00 PM - 6:00 PM)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Survey Purpose -->
                <div class="form-section">
                    <h3>Purpose of Survey</h3>
                    <div class="purpose-options">
                        <div class="radio-group">
                            <input type="radio" id="purpose_pre_inspection" name="survey_purpose" value="pre_inspection" checked>
                            <label for="purpose_pre_inspection">
                                <i class="fas fa-search"></i>
                                <span>Pre‑Inspection Assessment</span>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" id="purpose_insurance" name="survey_purpose" value="insurance">
                            <label for="purpose_insurance">
                                <i class="fas fa-shield-alt"></i>
                                <span>Insurance Renewal</span>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" id="purpose_audit" name="survey_purpose" value="audit">
                            <label for="purpose_audit">
                                <i class="fas fa-clipboard-check"></i>
                                <span>Audit Preparation</span>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" id="purpose_maintenance" name="survey_purpose" value="maintenance">
                            <label for="purpose_maintenance">
                                <i class="fas fa-tools"></i>
                                <span>Preventive Maintenance</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="form-section">
                    <h3>Additional Information</h3>
                    <div class="form-group">
                        <label for="survey_requirements">Specific Requirements or Questions</label>
                        <textarea id="survey_requirements" name="requirements" rows="3" placeholder="Any specific areas of concern or questions..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="survey_files">Upload Documents (Optional)</label>
                        <div class="file-upload-area">
                            <input type="file" id="survey_files" name="files[]" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                            <div class="upload-placeholder">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Drop site layout or old reports here</span>
                                <small>PDF, JPG, DOC files only. Max 10MB each.</small>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn btn-primary submit-booking">
                        <i class="fas fa-calendar-plus"></i>
                        Confirm My Booking
                    </button>
                </div>
            </form>

            <div class="booking-assurance">
                <i class="fas fa-clock"></i>
                <span>Our operations team will contact you within 24 hours to confirm your slot.</span>
            </div>
        </div>
    </div>
</section>