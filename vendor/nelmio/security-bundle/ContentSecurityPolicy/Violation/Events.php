<?php

/*
 * This file is part of the Nelmio SecurityBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\SecurityBundle\ContentSecurityPolicy\Violation;

final class Events
{
    /**
     * @deprecated since nelmio/security-bundle 2.12, use `ReportEvent::class` instead.
     */
    const VIOLATION_REPORT = 'csp.violation.report';
}
