<?php

namespace Tapp\LaravelUppyS3MultipartUpload\View\Components\Input;

use Illuminate\View\Component;

class Uppy extends Component
{
    public string $options;

    public string $statusBarOptions;

    public string $dragDropOptions;

    public string $hiddenField;

    public string $extraJSForOnUploadSuccess;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $options = '', string $statusBarOptions = '', string $dragDropOptions = '', string $hiddenField = '', $extraJSForOnUploadSuccess = '')
    {
        $this->options                   = $options;
        $this->statusBarOptions          = $statusBarOptions;
        $this->dragDropOptions           = $dragDropOptions;
        $this->hiddenField               = $hiddenField;
        $this->extraJSForOnUploadSuccess = $extraJSForOnUploadSuccess;

        if (!$options) {
            $this->options = "{
                debug: true,
                autoProceed: true,
                allowMultipleUploads: false,
            }";
        }

        if (!$statusBarOptions) {
            $this->statusBarOptions = "{
                target: '.upload .for-ProgressBar',
                hideAfterFinish: false,
            }";
        }

        if (!$dragDropOptions) {
            $this->dragDropOptions = "{
                target: '.upload .for-DragDrop',
            }";
        }

        if (!$hiddenField) {
            $this->hiddenField = "file";
        }
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('uppy-s3-multipart-upload::components.input.uppy');
    }
}
