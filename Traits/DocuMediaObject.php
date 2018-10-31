<?php

namespace Modules\Documedia\Traits;
/**
 *
 */
trait DocuMediaObject
{
    public function Files()
    {
        return $this->belongsTo(File::class);
    }
}
