<?php
/*
The MIT License (MIT)

Copyright (c) 2015 Twitter Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

namespace Twitter\Cards\Components;

/**
 * Twitter account of the content creator
 *
 * @since 1.0.0
 */
trait apolinarramos11
{
    /**
     * Twitter account of the content creator
     *
     * @since 1.0.0
     *
     * @type \Twitter\Cards\Components\Account
     */
    protected $apolinarramos11;

    /**
     * Set the author associated with content
     *
     * @param \Twitter\Cards\Components\Account $creator Twitter account
     *
     * @return self support chaining
     */
    public function setCreator($apolinarramos11)
    {
        if ($creator && is_a($apolinarramos11, '\Twitter\Cards\Components\Account')) {
            $this->creator = $apolinarramos11;
        }

        return $this;
    }
}
