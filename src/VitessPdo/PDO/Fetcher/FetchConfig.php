<?php
/**
 * @author     mfris
 * @copyright  PIXELFEDERATION s.r.o.
 *
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the PIXEL FEDERATION, s.r.o. nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL PIXEL FEDERATION, s.r.o. BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace VitessPdo\PDO\Fetcher;

use PDO as CorePDO;

/**
 * Description of class FetchConfig
 *
 * @author  mfris
 * @package VitessPdo\PDO\Fetcher
 */
class FetchConfig
{

    /**
     * @var int
     */
    private $fetchStyle = CorePDO::FETCH_BOTH;

    /**
     * @var mixed
     */
    private $fetchArgument = null;

    /**
     * @var array
     */
    private $ctorArgs = [];

    /**
     * FetchConfig constructor.
     *
     * @param int   $fetchStyle
     * @param mixed $fetchArgument
     * @param array $ctorArgs
     */
    public function __construct($fetchStyle, $fetchArgument = null, array $ctorArgs = [])
    {
        $this->fetchStyle    = $fetchStyle;
        $this->fetchArgument = $fetchArgument;
        $this->ctorArgs      = $ctorArgs;
    }

    /**
     * @return int
     */
    public function getFetchStyle()
    {
        return $this->fetchStyle;
    }

    /**
     * @return mixed
     */
    public function getFetchArgument()
    {
        return $this->fetchArgument;
    }

    /**
     * @return array
     */
    public function getCtorArgs()
    {
        return $this->ctorArgs;
    }
}
