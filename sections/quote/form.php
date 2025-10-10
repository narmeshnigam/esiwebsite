<section class="quote-form-section" id="quote-form">
    <div class="container">
        <div class="form-header">
            <h2>Get Started in Less Than a Minute</h2>
            <div class="progress-indicator">
                <div class="progress-step active" data-step="1">
                    <div class="step-number">1</div>
                    <span>Contact</span>
                </div>
                <div class="progress-step" data-step="2">
                    <div class="step-number">2</div>
                    <span>Site Details</span>
                </div>
                <div class="progress-step" data-step="3">
                    <div class="step-number">3</div>
                    <span>Services</span>
                </div>
                <div class="progress-step" data-step="4">
                    <div class="step-number">4</div>
                    <span>Timeline</span>
                </div>
            </div>
        </div>

        <form class="quote-form" id="quote-form-main" method="POST" action="/submit-quote.php" enctype="multipart/form-data">
            <!-- Step 1: Contact Information -->
            <div class="form-step active" data-step="1">
                <h3>Contact Information</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="step-actions">
                    <button type="button" class="btn btn-primary next-step">Next Step</button>
                </div>
            </div>

            <!-- Step 2: Site Details -->
            <div class="form-step" data-step="2">
                <h3>Site Details</h3>
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="address">Site Address / City *</label>
                        <textarea id="address" name="address" rows="3" required placeholder="Enter complete address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="facility_type">Type of Facility *</label>
                        <select id="facility_type" name="facility_type" required>
                            <option value="">Select facility type</option>
                            <option value="industrial">Industrial</option>
                            <option value="commercial">Commercial</option>
                            <option value="residential">Residential</option>
                            <option value="institutional">Institutional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="load_capacity">Load Capacity</label>
                        <div class="input-with-unit">
                            <input type="number" id="load_capacity" name="load_capacity" placeholder="e.g., 500">
                            <select name="load_unit">
                                <option value="kVA">kVA</option>
                                <option value="kW">kW</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="panels">Number of Panels</label>
                        <input type="number" id="panels" name="panels" placeholder="e.g., 5">
                    </div>
                    <div class="form-group">
                        <label for="floor_area">Total Floor Area (sq. ft.)</label>
                        <input type="number" id="floor_area" name="floor_area" placeholder="e.g., 10000">
                    </div>
                </div>
                <div class="step-actions">
                    <button type="button" class="btn btn-outline prev-step">Previous</button>
                    <button type="button" class="btn btn-primary next-step">Next Step</button>
                </div>
            </div>

            <!-- Step 3: Service Interest -->
            <div class="form-step" data-step="3">
                <h3>Services Required</h3>
                <div class="service-checkboxes">
                    <div class="checkbox-group">
                        <input type="checkbox" id="esi" name="services[]" value="esi" checked>
                        <label for="esi">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Electrical Safety Inspection (ESI)</span>
                        </label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="thermography" name="services[]" value="thermography">
                        <label for="thermography">
                            <i class="fas fa-temperature-high"></i>
                            <span>Thermography Analysis</span>
                        </label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="energy_audit" name="services[]" value="energy_audit">
                        <label for="energy_audit">
                            <i class="fas fa-bolt"></i>
                            <span>Energy Audit</span>
                        </label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="compliance" name="services[]" value="compliance">
                        <label for="compliance">
                            <i class="fas fa-certificate"></i>
                            <span>Compliance Certification</span>
                        </label>
                    </div>
                </div>
                <div class="step-actions">
                    <button type="button" class="btn btn-outline prev-step">Previous</button>
                    <button type="button" class="btn btn-primary next-step">Next Step</button>
                </div>
            </div>

            <!-- Step 4: Timeline & Upload -->
            <div class="form-step" data-step="4">
                <h3>Timeline & Additional Information</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="timeline">Required Within *</label>
                        <select id="timeline" name="timeline" required>
                            <option value="">Select timeline</option>
                            <option value="7_days">Within 7 days</option>
                            <option value="15_days">Within 15 days</option>
                            <option value="30_days">Within 30 days</option>
                            <option value="flexible">Flexible</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact_method">Preferred Contact Method *</label>
                        <select id="contact_method" name="contact_method" required>
                            <option value="">Select method</option>
                            <option value="phone">Phone Call</option>
                            <option value="email">Email</option>
                            <option value="whatsapp">WhatsApp</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label for="additional_info">Additional Requirements</label>
                        <textarea id="additional_info" name="additional_info" rows="3" placeholder="Any specific requirements or questions..."></textarea>
                    </div>
                    <div class="form-group full-width">
                        <label for="file_upload">Upload Documents (Optional)</label>
                        <div class="file-upload-area">
                            <input type="file" id="file_upload" name="files[]" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                            <div class="upload-placeholder">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Drop files here or click to browse</span>
                                <small>PDF, JPG, DOC files only. Max 10MB each.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-actions">
                    <button type="button" class="btn btn-outline prev-step">Previous</button>
                    <button type="submit" class="btn btn-primary submit-quote">
                        <i class="fas fa-paper-plane"></i>
                        Request My Quote
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>