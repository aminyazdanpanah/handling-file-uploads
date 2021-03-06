<?php

/**
 * Copyright 2019 Amin Yazdanpanah<http://www.aminyazdanpanah.com>.
 *
 * Licensed under the MIT License;
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://opensource.org/licenses/MIT
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace AYazdanpanah\SaveUploadedFiles;


interface ValidatorInterface
{
    /**
     * @param int $min_size
     * @return $this
     */
    public function setMinSize(int $min_size);

    /**
     * @param int $max_size
     * @return $this
     */
    public function setMaxSize(int $max_size);

    /**
     * @param array $type
     * @return $this
     */
    public function setType(array $type);

    /**
     * @return $this
     */
    public function getMinSize();

    /**
     * @return mixed
     */
    public function getMaxSize();

    /**
     * @return mixed
     */
    public function getTypes();
}