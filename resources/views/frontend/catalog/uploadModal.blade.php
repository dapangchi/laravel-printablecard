<!-- Upload image -->
<div id="uploadModal" class="modal">
    <div class="canClose uploadModalBg"></div>
    <div class="upload-modal-wrap">
        <div class="upload-modal-header">
            <div class="upload-modal-titl">UPLOAD FILES</div>
            <div class="upload-modal-close canClose"><img src="{{ asset('frontend/img/close-icon.svg') }}" alt=""></div>
            <div class="upload-hint">
                Accepted file format: jpg, jpeg, png, bmp, psd, ai, pdf, eps, XLS, svg, csv<br/>
                Maximum upload file size from computer is 75MB.<br/>
                Please note:<br/>
For your company logo we require editable vector graphics such as ai, and eps. If your logo is not vector graphics, we may require you to have your designer trace the logo in vector format. Or our designer can trace it for you at additional charge.<br/>
                If you have issue uploading files, you may skip this file upload process and our sales department help you via email. 
        </div>
        <div class="upload-modal-content">
            <div class="device-choose-wrap" id="device-choose-wrap">
                <div class="upload-tab upload-tab-comp upload-tab-active" data-target="#computer-drop-block">
                    <div class="upload-tab-content">
                        <img src="{{ asset('frontend/img/comp-upload-icon.svg') }}" alt="icon">From Computer
                    </div>
                </div>
                <!--<div class="upload-tab upload-tab-dropbox" data-target="#dropbox-drop-block">
                    <div class="upload-tab-content">
                        <img src="{{ asset('frontend/img/dropbox-icon.svg') }}" alt="icon">Dropbox
                    </div>
                </div>
                <div class="upload-tab upload-goog-drive" data-target="#goog-drop-block">
                    <div class="upload-tab-content">
                        <img src="{{ asset('frontend/img/goog-drive-icon.svg') }}" alt="icon">Google Drive
                    </div>                                
                </div>-->
            </div>
            <div class="drop-block-wrap">
                <div class="computer-drop-block drop-block-box" id="computer-drop-block">
                    {!! Form::open(array('url' => url('fileupload/design_file'), 'id' => 'my-dropzone', 'class' => 'dropzone upload-files-zone')) !!} 
                        <input type="hidden" id="target" value=""/>
                        
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dz-default dz-message">
                            <div class="upload-icon-wrap">
                                <img src="{{ asset('frontend/img/upload-icon.svg') }}" alt="icon">
                            </div>
                            <div class="upload-box-main">Drop files here <span class="fw-medium">to upload</span></div>
                            <div class="upload-box-footer">or click here</div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="dropbox-drop-block drop-block-box" id="dropbox-drop-block">
                    <div class="drop-block-titl">Upload your file from Dropbox</div>
                    <div class="connect-wrap border-upload-blue col-upload-blue"><img src="{{ asset('frontend/img/dropbox-icon-blue.svg') }}" alt="icon">Connect to <span>Dropbox Here</span></div>
                </div>
                <div class="goog-drop-block drop-block-box" id="goog-drop-block">
                    <div class="drop-block-titl">Upload your file from Google Drive</div>
                    <div class="connect-wrap border-upload-blue col-upload-blue"><img src="{{ asset('frontend/img/goog-drive-blue-icon.svg') }}" alt="icon">Connect to <span>Google Drive</span></div>
                </div>
            </div>
        </div>
        <div class="upload-modal-footer">
            <div class="upload-hint">Please ensure you have the rights to use any of the materials you have uploaded. Please visit our <a href="{{ route('page.terms.html') }}" target="_blank">terms</a> for more information.</div>
            <div class="modal-footer-but-wrap">
                <button class="ok-but bg-upload-blue canClose" btn="btn-close-upload">OK</button>
            </div>
        </div>
    </div>
</div>