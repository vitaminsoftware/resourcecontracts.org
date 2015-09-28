<?php

return [
    'annotation_category_schema' => [
        'i-general-information'              =>
            [
                'country',
                'name-of-company-executing-document',
                'legal-enterprise-identifier',
                'corporate-headquarters',
                'company-structure',
                'parent-company-or-affiliates-outside-of-country',
                'company-website',
                'type-of-contract',
                'project-title',
                'name-of-field-block-deposit-or-site',
                'location',
                'closest-community',
                'date-of-issue-of-titlepermit',
                'year-of-issue-of-titlepermit',
                'date-of-ratification',
                'other-general'
            ],
        '1-fundamental-provisions'           =>
            [
                'legal-enterprise-identifier',
                'signatories-company',
                'state-agency-national-company-or-ministry-executing-the-document',
                'signatories-state',
                'name-andor-composition-of-the-company-created',
                'date-contract-signature',
                'year-of-contract-signature',
                'term',
                'renewal-or-extension-of-term',
                'resources',
                'size-of-concession-area'
            ],
        '2-community-and-social-obligations' =>
            [
                'local-development-agreement',
                'sacred-cultural-or-historical-sites',
                'community-consultation',
                'training',
                'local-employment',
                'local-procurement',
                'resettlement',
                'outgrowers-program',
                'protections-or-benefits-for-employees-dependents-or-others',
                'physical-security-or-protection-of-property',
                'grievance-mechanisms',
                'right-to-access-concession-area-non-contracting-parties'
            ],
        '3-developers-financial-obligations' =>
            [
                'royalties',
                'income-tax-rate',
                'income-tax-exemptions',
                'income-tax-other',
                'production-share-cost-oil-features-basis-of-calculation-limits-on-cost-recovery-eg-as-of-revenue-or-production-capex-uplift-etc',
                'production-share-profit-oil-features-triggers-for-variations-in-split-irr-factor-production-etc',
                'service-agreement-fee-to-developer-or-contractor',
                'capital-gains-tax',
                'withholding-tax',
                'provisions-for-renewing-reserves',
                'investment-credit',
                'custom-duties',
                'social-security-contributions-by-employer',
                'surface-fees-or-rent',
                'financial-obligations-community-or-commodity-funds',
                'carbon-credits',
                'bonuses',
                'state-participation',
                'audit-mechanisms-financial-obligations',
                'restrictions-on-transactions-with-affiliated-parties',
                'other-financialfiscal'
            ],
        '4-environmental-provisions'         =>
            [
                'environmental-impact-assessment-and-management-plan',
                'environmental-monitoring',
                'socialhuman-rights-impact-assessment-and-management-plan',
                'socialhuman-rights-monitoring',
                'water-use',
                'environmental-protections'
            ],
        '5-operational-provisions'           =>
            [
                'work-and-investment-commitments',
                'transfer-of-risk',
                'infrastructure',
                'infrastructure-third-party-use',
                'value-addition-or-downstream-activities',
                'land-use-outside-of-concession-area',
                'other-operational'
            ],
        '6-miscellaneous-provisions'         =>
            [
                'governing-law',
                'arbitration-and-dispute-resolution',
                'stabilization-clause',
                'assignment-or-transfer',
                'cancellation-or-termination',
                'confidentiality',
                'language',
                'reporting-requirements',
                'hardship-clause-or-force-majeure',
                'expropriation-or-nationalization',
                'other-miscellaneous'
            ],
        'iii-document-notes'                 =>
            [
                'pages-missing-from-copy',
                'annexes-missing-from-copy'
            ]
    ]
    ,
    'cluster'                    => [
        "i-general-information"                                                                                                           => "Other",
        "country"                                                                                                                         => "General",
        "name-of-company-executing-document"                                                                                              => "General",
        "legal-enterprise-identifier"                                                                                                     => "General",
        "corporate-headquarters"                                                                                                          => "General",
        "company-structure"                                                                                                               => "General",
        "parent-company-or-affiliates-outside-of-country"                                                                                 => "General",
        "company-website"                                                                                                                 => "General",
        "type-of-contract"                                                                                                                => "General",
        "project-title"                                                                                                                   => "General",
        "name-of-field-block-deposit-or-site"                                                                                             => "General",
        "location"                                                                                                                        => "General",
        "closest-community"                                                                                                               => "General",
        "date-of-issue-of-titlepermit"                                                                                                    => "General",
        "year-of-issue-of-titlepermit"                                                                                                    => "General",
        "date-of-ratification"                                                                                                            => "General",
        "other-general"                                                                                                                   => "General",
        "ii-summary-of-terms"                                                                                                             => "Other",
        "1-fundamental-provisions"                                                                                                        => "Other",
        "signatories-company"                                                                                                             => "General",
        "state-agency-national-company-or-ministry-executing-the-document"                                                                => "General",
        "signatories-state"                                                                                                               => "General",
        "name-andor-composition-of-the-company-created"                                                                                   => "General",
        "date-contract-signature"                                                                                                         => "General",
        "year-of-contract-signature"                                                                                                      => "General",
        "term"                                                                                                                            => "General",
        "renewal-or-extension-of-term"                                                                                                    => "General",
        "resources"                                                                                                                       => "General",
        "size-of-concession-area"                                                                                                         => "Other",
        "2-community-and-social-obligations"                                                                                              => "Other",
        "local-development-agreement"                                                                                                     => "Social/human rights",
        "sacred-cultural-or-historical-sites"                                                                                             => "Social/human rights",
        "community-consultation"                                                                                                          => "Social/human rights",
        "training"                                                                                                                        => "Social/human rights",
        "local-employment"                                                                                                                => "Social/human rights",
        "local-procurement"                                                                                                               => "Social/human rights",
        "resettlement"                                                                                                                    => "Social/human rights",
        "outgrowers-program"                                                                                                              => "Social/human rights",
        "protections-or-benefits-for-employees-dependents-or-others"                                                                      => "Social/human rights",
        "physical-security-or-protection-of-property"                                                                                     => "Operational",
        "grievance-mechanisms"                                                                                                            => "Social/human rights",
        "right-to-access-concession-area-non-contracting-parties"                                                                         => "Social/human rights",
        "3-developers-financial-obligations"                                                                                              => "Other",
        "royalties"                                                                                                                       => "Financial/fiscal",
        "income-tax-rate"                                                                                                                 => "Financial/fiscal",
        "income-tax-exemptions"                                                                                                           => "Financial/fiscal",
        "income-tax-other"                                                                                                                => "Financial/fiscal",
        "production-share-cost-oil-features-basis-of-calculation-limits-on-cost-recovery-eg-as-of-revenue-or-production-capex-uplift-etc" => "Financial/fiscal",
        "production-share-profit-oil-features-triggers-for-variations-in-split-irr-factor-production-etc"                                 => "Financial/fiscal",
        "service-agreement-fee-to-developer-or-contractor"                                                                                => "Financial/fiscal",
        "capital-gains-tax"                                                                                                               => "Financial/fiscal",
        "withholding-tax"                                                                                                                 => "Financial/fiscal",
        "provisions-for-renewing-reserves"                                                                                                => "Financial/fiscal",
        "investment-credit"                                                                                                               => "Financial/fiscal",
        "custom-duties"                                                                                                                   => "Financial/fiscal",
        "social-security-contributions-by-employer"                                                                                       => "Financial/fiscal",
        "surface-fees-or-rent"                                                                                                            => "Financial/fiscal",
        "financial-obligations-community-or-commodity-funds"                                                                              => "Financial/fiscal",
        "carbon-credits"                                                                                                                  => "Financial/fiscal",
        "bonuses"                                                                                                                         => "Financial/fiscal",
        "state-participation"                                                                                                             => "Financial/fiscal",
        "audit-mechanisms-financial-obligations"                                                                                          => "Financial/fiscal",
        "restrictions-on-transactions-with-affiliated-parties"                                                                            => "Financial/fiscal",
        "other-financialfiscal"                                                                                                           => "Financial/fiscal",
        "4-environmental-provisions"                                                                                                      => "Other",
        "environmental-impact-assessment-and-management-plan"                                                                             => "Environmental",
        "environmental-monitoring"                                                                                                        => "Environmental",
        "socialhuman-rights-impact-assessment-and-management-plan"                                                                        => "Social/human rights",
        "socialhuman-rights-monitoring"                                                                                                   => "Social/human rights",
        "water-use"                                                                                                                       => "Environmental",
        "environmental-protections"                                                                                                       => "Environmental",
        "5-operational-provisions"                                                                                                        => "Other",
        "work-and-investment-commitments"                                                                                                 => "Operational",
        "transfer-of-risk"                                                                                                                => "Operational",
        "infrastructure"                                                                                                                  => "Operational",
        "infrastructure-third-party-use"                                                                                                  => "Operational",
        "value-addition-or-downstream-activities"                                                                                         => "Operational",
        "land-use-outside-of-concession-area"                                                                                             => "Operational",
        "other-operational"                                                                                                               => "Operational",
        "6-miscellaneous-provisions"                                                                                                      => "Other",
        "governing-law"                                                                                                                   => "Other",
        "arbitration-and-dispute-resolution"                                                                                              => "Other",
        "stabilization-clause"                                                                                                            => "Other",
        "assignment-or-transfer"                                                                                                          => "Other",
        "cancellation-or-termination"                                                                                                     => "Other",
        "confidentiality"                                                                                                                 => "Other",
        "language"                                                                                                                        => "General",
        "reporting-requirements"                                                                                                          => "Other",
        "hardship-clause-or-force-majeure"                                                                                                => "Other",
        "expropriation-or-nationalization"                                                                                                => "Other",
        "other-miscellaneous"                                                                                                             => "Other",
        "iii-document-notes"                                                                                                              => "Other",
        "pages-missing-from-copy"                                                                                                         => "Other",
        "annexes-missing-from-copy"                                                                                                       => "Other",
        "i-general-information"                                                                                                           => "Other",
        "country"                                                                                                                         => "General",
        "name-of-company-executing-document"                                                                                              => "General",
        "legal-enterprise-identifier"                                                                                                     => "General",
        "corporate-headquarters"                                                                                                          => "General",
        "company-structure"                                                                                                               => "General",
        "parent-company-or-affiliates-outside-of-country"                                                                                 => "General",
        "company-website"                                                                                                                 => "General",
        "type-of-contract"                                                                                                                => "General",
        "project-title"                                                                                                                   => "General",
        "name-of-field-block-deposit-or-site"                                                                                             => "General",
        "location"                                                                                                                        => "General",
        "closest-community"                                                                                                               => "General",
        "date-of-issue-of-titlepermit"                                                                                                    => "General",
        "year-of-issue-of-titlepermit"                                                                                                    => "General",
        "date-of-ratification"                                                                                                            => "General",
        "other-general"                                                                                                                   => "General",
        "ii-summary-of-terms"                                                                                                             => "Other",
        "1-fundamental-provisions"                                                                                                        => "Other",
        "signatories-company"                                                                                                             => "General",
        "state-agency-national-company-or-ministry-executing-the-document"                                                                => "General",
        "signatories-state"                                                                                                               => "General",
        "name-andor-composition-of-the-company-created"                                                                                   => "General",
        "date-contract-signature"                                                                                                         => "General",
        "year-of-contract-signature"                                                                                                      => "General",
        "term"                                                                                                                            => "General",
        "renewal-or-extension-of-term"                                                                                                    => "General",
        "resources"                                                                                                                       => "General",
        "size-of-concession-area"                                                                                                         => "Other",
        "2-community-and-social-obligations"                                                                                              => "Other",
        "local-development-agreement"                                                                                                     => "Social/human rights",
        "sacred-cultural-or-historical-sites"                                                                                             => "Social/human rights",
        "community-consultation"                                                                                                          => "Social/human rights",
        "training"                                                                                                                        => "Social/human rights",
        "local-employment"                                                                                                                => "Social/human rights",
        "local-procurement"                                                                                                               => "Social/human rights",
        "resettlement"                                                                                                                    => "Social/human rights",
        "outgrowers-program"                                                                                                              => "Social/human rights",
        "protections-or-benefits-for-employees-dependents-or-others"                                                                      => "Social/human rights",
        "physical-security-or-protection-of-property"                                                                                     => "Operational",
        "grievance-mechanisms"                                                                                                            => "Social/human rights",
        "right-to-access-concession-area-non-contracting-parties"                                                                         => "Social/human rights",
        "3-developers-financial-obligations"                                                                                              => "Other",
        "royalties"                                                                                                                       => "Financial/fiscal",
        "income-tax-rate"                                                                                                                 => "Financial/fiscal",
        "income-tax-exemptions"                                                                                                           => "Financial/fiscal",
        "income-tax-other"                                                                                                                => "Financial/fiscal",
        "production-share-cost-oil-features-basis-of-calculation-limits-on-cost-recovery-eg-as-of-revenue-or-production-capex-uplift-etc" => "Financial/fiscal",
        "production-share-profit-oil-features-triggers-for-variations-in-split-irr-factor-production-etc"                                 => "Financial/fiscal",
        "service-agreement-fee-to-developer-or-contractor"                                                                                => "Financial/fiscal",
        "capital-gains-tax"                                                                                                               => "Financial/fiscal",
        "withholding-tax"                                                                                                                 => "Financial/fiscal",
        "provisions-for-renewing-reserves"                                                                                                => "Financial/fiscal",
        "investment-credit"                                                                                                               => "Financial/fiscal",
        "custom-duties"                                                                                                                   => "Financial/fiscal",
        "social-security-contributions-by-employer"                                                                                       => "Financial/fiscal",
        "surface-fees-or-rent"                                                                                                            => "Financial/fiscal",
        "financial-obligations-community-or-commodity-funds"                                                                              => "Financial/fiscal",
        "carbon-credits"                                                                                                                  => "Financial/fiscal",
        "bonuses"                                                                                                                         => "Financial/fiscal",
        "state-participation"                                                                                                             => "Financial/fiscal",
        "audit-mechanisms-financial-obligations"                                                                                          => "Financial/fiscal",
        "restrictions-on-transactions-with-affiliated-parties"                                                                            => "Financial/fiscal",
        "other-financialfiscal"                                                                                                           => "Financial/fiscal",
        "4-environmental-provisions"                                                                                                      => "Other",
        "environmental-impact-assessment-and-management-plan"                                                                             => "Environmental",
        "environmental-monitoring"                                                                                                        => "Environmental",
        "socialhuman-rights-impact-assessment-and-management-plan"                                                                        => "Social/human rights",
        "socialhuman-rights-monitoring"                                                                                                   => "Social/human rights",
        "water-use"                                                                                                                       => "Environmental",
        "environmental-protections"                                                                                                       => "Environmental",
        "5-operational-provisions"                                                                                                        => "Other",
        "work-and-investment-commitments"                                                                                                 => "Operational",
        "transfer-of-risk"                                                                                                                => "Operational",
        "infrastructure"                                                                                                                  => "Operational",
        "infrastructure-third-party-use"                                                                                                  => "Operational",
        "value-addition-or-downstream-activities"                                                                                         => "Operational",
        "land-use-outside-of-concession-area"                                                                                             => "Operational",
        "other-operational"                                                                                                               => "Operational",
        "6-miscellaneous-provisions"                                                                                                      => "Other",
        "governing-law"                                                                                                                   => "Other",
        "arbitration-and-dispute-resolution"                                                                                              => "Other",
        "stabilization-clause"                                                                                                            => "Other",
        "assignment-or-transfer"                                                                                                          => "Other",
        "cancellation-or-termination"                                                                                                     => "Other",
        "confidentiality"                                                                                                                 => "Other",
        "language"                                                                                                                        => "General",
        "reporting-requirements"                                                                                                          => "Other",
        "hardship-clause-or-force-majeure"                                                                                                => "Other",
        "expropriation-or-nationalization"                                                                                                => "Other",
        "other-miscellaneous"                                                                                                             => "Other",
        "iii-document-notes"                                                                                                              => "Other",
        "pages-missing-from-copy"                                                                                                         => "Other",
        "annexes-missing-from-copy"                                                                                                       => "Other"
    ]

];