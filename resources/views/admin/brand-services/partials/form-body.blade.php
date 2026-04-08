<div class="mb-3">
    <a href="{{ route('admin.brands.services.index', $brand) }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left"></i> All service pages</a>
</div>

<div class="card mb-3">
    <div class="card-header"><strong>General</strong></div>
    <div class="card-body row g-3">
        <div class="col-md-6">
            <label class="form-label">Page title (admin) <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" required maxlength="255" value="{{ old('title', $service->title ?? '') }}">
        </div>
        <div class="col-md-6">
            <label class="form-label">URL slug</label>
            <input type="text" name="slug" class="form-control" maxlength="255" placeholder="auto from title if empty" value="{{ old('slug', $service->slug ?? '') }}">
            <small class="text-muted">Lowercase, hyphens. Leave empty to generate from title.</small>
        </div>
        <div class="col-12">
            <label class="form-label">Parent service</label>
            <select name="parent_id" class="form-select @error('parent_id') is-invalid @enderror">
                <option value="">— Top level (no parent) —</option>
                @foreach(($parentOptions ?? []) as $id => $label)
                    <option value="{{ $id }}" @selected((string) old('parent_id', $service->parent_id ?? '') === (string) $id)>{{ $label }}</option>
                @endforeach
            </select>
            @error('parent_id')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <small class="text-muted">Optional. Nest under another service (e.g. Texas → Houston). Each level uses the same content sections.</small>
        </div>
        <div class="col-md-3">
            <label class="form-label">Sort order</label>
            <input type="number" name="sort_order" class="form-control" min="0" max="65535" value="{{ old('sort_order', $service->sort_order ?? 0) }}">
        </div>
        <div class="col-md-3 d-flex align-items-end pb-2">
            <div class="form-check">
                <input type="hidden" name="is_published" value="0">
                <input class="form-check-input" type="checkbox" name="is_published" id="is_published" value="1" @checked(old('is_published', $service->is_published ?? true))>
                <label class="form-check-label" for="is_published">Published</label>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Meta title</label>
            <input type="text" name="meta_title" class="form-control" maxlength="255" value="{{ old('meta_title', $service->meta_title ?? '') }}">
        </div>
        <div class="col-12">
            <label class="form-label">Meta description</label>
            <textarea name="meta_description" class="form-control" rows="2" maxlength="500">{{ old('meta_description', $service->meta_description ?? '') }}</textarea>
        </div>
    </div>
</div>

<div class="accordion" id="svcSections">
    <p class="text-muted small mb-2">Site <strong>header</strong> and <strong>footer</strong> stay in your static theme (not managed here).</p>

    {{-- Hero --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#secHero">1. Hero</button></h2>
        <div id="secHero" class="accordion-collapse collapse show" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-12">
                    <label class="form-label">Background image</label>
                    @php $heroBgUrl = data_get($c, 'hero.background_image'); @endphp
                    @if($heroBgUrl)
                        <input type="hidden" name="content[hero][background_image]" value="{{ $heroBgUrl }}">
                    @endif
                    <input type="file" name="file_hero_background" class="form-control" accept="image/*">
                    @if($heroBgUrl)
                        <div class="mt-2">
                            <small class="text-muted d-block">Current: <a href="{{ $heroBgUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_hero_background" value="0">
                            <div class="form-check mt-2 mb-0">
                                <input class="form-check-input" type="checkbox" name="remove_hero_background" id="remove_hero_background" value="1" @checked(old('remove_hero_background') == '1')>
                                <label class="form-check-label" for="remove_hero_background">Remove current image</label>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-6"><label class="form-label">Heading (line 1)</label><input type="text" class="form-control" name="content[hero][heading]" value="{{ data_get($c, 'hero.heading') }}"></div>
                <div class="col-md-6"><label class="form-label">Heading highlight</label><input type="text" class="form-control" name="content[hero][heading_highlight]" value="{{ data_get($c, 'hero.heading_highlight') }}"></div>
                <div class="col-12"><label class="form-label">Description</label><textarea class="form-control" name="content[hero][description]" rows="3">{{ data_get($c, 'hero.description') }}</textarea></div>
            </div>
        </div>
    </div>

    {{-- Featured in --}}
    @php
        $featLogos = old('content.featured_in.logos', data_get($c, 'featured_in.logos', []));
        if (! is_array($featLogos)) {
            $featLogos = [];
        }
        $featUseDefault = old('content.featured_in.use_default_logos', data_get($c, 'featured_in.use_default_logos', true));
        $featUseDefaultOn = $featUseDefault === true || $featUseDefault === 1 || $featUseDefault === '1';
        $featKeys = array_map('intval', array_keys($featLogos));
        $featNextKey = $featKeys === [] ? 0 : max($featKeys) + 1;
    @endphp
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secFeat">2. As featured in (logos)</button></h2>
        <div id="secFeat" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body">
                <input type="hidden" name="content[featured_in][use_default_logos]" value="0">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="content[featured_in][use_default_logos]" id="feat_use_default" value="1" @checked($featUseDefaultOn)>
                    <label class="form-check-label" for="feat_use_default">Use theme default logos (static slider from <code>assets/img/feature/*.webp</code> on the site)</label>
                </div>
                <div id="feat-custom-logos-wrap" class="border rounded p-3 bg-light" style="{{ $featUseDefaultOn ? 'display:none' : '' }}">
                    <p class="text-muted small mb-2">Add or remove rows as needed. Upload a file or paste an image URL per logo.</p>
                    <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="feat-add-logo-row"><i class="bi bi-plus-lg"></i> Add logo</button>
                    <div id="feat-logo-rows" class="vstack gap-2">
                        @foreach($featLogos as $idx => $featUrl)
                            @php $idx = (int) $idx; @endphp
                            <div class="border rounded p-3 bg-white feat-logo-row" data-feat-idx="{{ $idx }}">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="small fw-semibold text-muted">Logo {{ $loop->iteration }}</span>
                                    <button type="button" class="btn btn-sm btn-outline-danger feat-remove-logo-row">Remove row</button>
                                </div>
                                <input type="file" name="file_featured_logo[{{ $idx }}]" class="form-control form-control-sm mb-2" accept="image/*">
                                @if($featUrl)
                                    <small class="text-muted d-block mb-2">Current: <a href="{{ $featUrl }}" target="_blank">view</a></small>
                                    <input type="hidden" name="remove_featured_logo[{{ $idx }}]" value="0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="remove_featured_logo[{{ $idx }}]" id="remove_featured_logo_{{ $idx }}" value="1" @checked(old('remove_featured_logo.'.$idx) == '1')>
                                        <label class="form-check-label small" for="remove_featured_logo_{{ $idx }}">Remove image</label>
                                    </div>
                                @endif
                                <label class="form-label small text-muted mb-0">Or paste URL</label>
                                <input type="text" class="form-control form-control-sm" name="content[featured_in][logos][{{ $idx }}]" placeholder="https://… or /storage/…" value="{{ $featUrl }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Sub-service areas (state headline + cities) --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secSubAreas">3. Sub-service areas</button></h2>
        <div id="secSubAreas" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <p class="text-muted small col-12">City names come from <strong>child service pages</strong> under this service — not typed here. Set the state and optional copy below. In text fields you can use <code>{state}</code> and <code>{service}</code> (service = this page title). <code>{abbr}</code> is still replaced if present in old copy (defaults to the state name).</p>
                <div class="col-12">
                    <input type="hidden" name="content[sub_service_areas][enabled]" value="0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="content[sub_service_areas][enabled]" id="ssa_enabled" value="1" @checked(old('content.sub_service_areas.enabled', data_get($c, 'sub_service_areas.enabled') ? '1' : '0') == '1')>
                        <label class="form-check-label" for="ssa_enabled">Show sub-service areas section (headline + cities). Off = section hidden.</label>
                    </div>
                </div>
                <div class="col-md-6"><label class="form-label">State name</label><input type="text" class="form-control" name="content[sub_service_areas][state_name]" placeholder="e.g. Texas" value="{{ old('content.sub_service_areas.state_name', data_get($c, 'sub_service_areas.state_name')) }}"></div>
                <div class="col-12"><label class="form-label">Headline</label><input type="text" class="form-control" name="content[sub_service_areas][headline]" placeholder="Leave empty for the built-in default" value="{{ old('content.sub_service_areas.headline', data_get($c, 'sub_service_areas.headline')) }}"></div>
                <div class="col-12"><label class="form-label">Intro (before city list)</label><textarea class="form-control" name="content[sub_service_areas][intro]" rows="2">{{ old('content.sub_service_areas.intro', data_get($c, 'sub_service_areas.intro')) }}</textarea></div>
                <div class="col-md-8"><label class="form-label">Closing phrase</label><input type="text" class="form-control" name="content[sub_service_areas][outro]" value="{{ old('content.sub_service_areas.outro', data_get($c, 'sub_service_areas.outro')) }}"></div>
                <div class="col-md-4 d-flex align-items-end pb-1">
                    <input type="hidden" name="content[sub_service_areas][link_child_pages]" value="0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="content[sub_service_areas][link_child_pages]" id="ssa_links" value="1" @checked(old('content.sub_service_areas.link_child_pages', data_get($c, 'sub_service_areas.link_child_pages') ? '1' : '0') == '1')>
                        <label class="form-check-label" for="ssa_links">Link cities to sub-pages</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Intro --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secIntro">4. Intro</button></h2>
        <div id="secIntro" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-12"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[intro][heading]" value="{{ data_get($c, 'intro.heading') }}"></div>
                <div class="col-12"><label class="form-label">Description</label><textarea class="form-control" name="content[intro][description]" rows="4">{{ data_get($c, 'intro.description') }}</textarea></div>
            </div>
        </div>
    </div>

    {{-- Service tabs --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secTabs">5. Service tabs (3)</button></h2>
        <div id="secTabs" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body">
                @for($t = 0; $t < 3; $t++)
                    <div class="border rounded p-3 mb-3">
                        <h6 class="text-primary">Tab {{ $t + 1 }}</h6>
                        <div class="row g-2">
                            <div class="col-md-4"><label class="form-label small">Tab button title</label><input type="text" class="form-control" name="content[service_tabs][tabs][{{ $t }}][tab_title]" value="{{ data_get($c, "service_tabs.tabs.$t.tab_title") }}"></div>
                            <div class="col-md-4"><label class="form-label small">Heading part 1</label><input type="text" class="form-control" name="content[service_tabs][tabs][{{ $t }}][title]" value="{{ data_get($c, "service_tabs.tabs.$t.title") }}"></div>
                            <div class="col-md-4"><label class="form-label small">Highlight</label><input type="text" class="form-control" name="content[service_tabs][tabs][{{ $t }}][title_highlight]" value="{{ data_get($c, "service_tabs.tabs.$t.title_highlight") }}"></div>
                            <div class="col-md-4"><label class="form-label small">Suffix</label><input type="text" class="form-control" name="content[service_tabs][tabs][{{ $t }}][title_suffix]" value="{{ data_get($c, "service_tabs.tabs.$t.title_suffix") }}"></div>
                            <div class="col-12"><label class="form-label small">Description</label><textarea class="form-control" name="content[service_tabs][tabs][{{ $t }}][description]" rows="3">{{ data_get($c, "service_tabs.tabs.$t.description") }}</textarea></div>
                            <div class="col-md-6">
                                <label class="form-label small">Side image</label>
                                @php $tabImgUrl = data_get($c, "service_tabs.tabs.$t.image"); @endphp
                                @if($tabImgUrl)
                                    <input type="hidden" name="content[service_tabs][tabs][{{ $t }}][image]" value="{{ $tabImgUrl }}">
                                @endif
                                <input type="file" name="file_tab_image_{{ $t }}" class="form-control" accept="image/*">
                                @if($tabImgUrl)
                                    <div class="mt-1">
                                        <small class="text-muted">Current: <a href="{{ $tabImgUrl }}" target="_blank">view</a></small>
                                        <input type="hidden" name="remove_tab_image_{{ $t }}" value="0">
                                        <div class="form-check mt-1 mb-0">
                                            <input class="form-check-input" type="checkbox" name="remove_tab_image_{{ $t }}" id="remove_tab_image_{{ $t }}" value="1" @checked(old('remove_tab_image_'.$t) == '1')>
                                            <label class="form-check-label small" for="remove_tab_image_{{ $t }}">Remove image</label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-3"><label class="form-label small">Button label</label><input type="text" class="form-control" name="content[service_tabs][tabs][{{ $t }}][button_label]" value="{{ data_get($c, "service_tabs.tabs.$t.button_label") }}"></div>
                            @for($k = 0; $k < 8; $k++)
                                <div class="col-md-6 col-lg-3">
                                    <label class="form-label small">Checklist {{ $k + 1 }}</label>
                                    <input type="text" class="form-control form-control-sm" name="content[service_tabs][tabs][{{ $t }}][checklist][{{ $k }}]" value="{{ data_get($c, "service_tabs.tabs.$t.checklist.$k") }}">
                                </div>
                            @endfor
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Mid CTA --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secMid">6. Mid-page CTA banner</button></h2>
        <div id="secMid" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-12">
                    <label class="form-label">Background image</label>
                    @php $midCtaBgUrl = data_get($c, 'mid_cta.background_image'); @endphp
                    @if($midCtaBgUrl)
                        <input type="hidden" name="content[mid_cta][background_image]" value="{{ $midCtaBgUrl }}">
                    @endif
                    <input type="file" name="file_mid_cta_background" class="form-control" accept="image/*">
                    @if($midCtaBgUrl)
                        <div class="mt-2">
                            <small class="text-muted d-block">Current: <a href="{{ $midCtaBgUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_mid_cta_background" value="0">
                            <div class="form-check mt-2 mb-0">
                                <input class="form-check-input" type="checkbox" name="remove_mid_cta_background" id="remove_mid_cta_background" value="1" @checked(old('remove_mid_cta_background') == '1')>
                                <label class="form-check-label" for="remove_mid_cta_background">Remove current image</label>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-6"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[mid_cta][heading]" value="{{ data_get($c, 'mid_cta.heading') }}"></div>
                <div class="col-md-6"><label class="form-label">Heading highlight</label><input type="text" class="form-control" name="content[mid_cta][heading_highlight]" value="{{ data_get($c, 'mid_cta.heading_highlight') }}"></div>
                <div class="col-12"><label class="form-label">Subheading</label><textarea class="form-control" name="content[mid_cta][subheading]" rows="2">{{ data_get($c, 'mid_cta.subheading') }}</textarea></div>
                <div class="col-md-4"><label class="form-label">Phone</label><input type="text" class="form-control" name="content[mid_cta][phone]" value="{{ data_get($c, 'mid_cta.phone') }}"></div>
                <div class="col-md-4"><label class="form-label">Button label</label><input type="text" class="form-control" name="content[mid_cta][button_label]" value="{{ data_get($c, 'mid_cta.button_label') }}"></div>
            </div>
        </div>
    </div>

    {{-- Why choose --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secWhy">7. Why choose us</button></h2>
        <div id="secWhy" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-md-6"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[why_choose][heading]" value="{{ data_get($c, 'why_choose.heading') }}"></div>
                <div class="col-md-6"><label class="form-label">Heading highlight</label><input type="text" class="form-control" name="content[why_choose][heading_highlight]" value="{{ data_get($c, 'why_choose.heading_highlight') }}"></div>
                <div class="col-12"><label class="form-label">Intro</label><textarea class="form-control" name="content[why_choose][description]" rows="3">{{ data_get($c, 'why_choose.description') }}</textarea></div>
                @for($w = 0; $w < 4; $w++)
                    <div class="col-md-6">
                        <label class="form-label">Card {{ $w + 1 }} title</label>
                        <input type="text" class="form-control mb-1" name="content[why_choose][cards][{{ $w }}][title]" value="{{ data_get($c, "why_choose.cards.$w.title") }}">
                        <label class="form-label small">Description</label>
                        <textarea class="form-control" name="content[why_choose][cards][{{ $w }}][description]" rows="2">{{ data_get($c, "why_choose.cards.$w.description") }}</textarea>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Success band --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secSucc">8. Everything you need (icons row)</button></h2>
        <div id="secSucc" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-md-4"><label class="form-label">Heading (strong)</label><input type="text" class="form-control" name="content[success_features][heading_strong]" value="{{ data_get($c, 'success_features.heading_strong') }}"></div>
                <div class="col-md-4"><label class="form-label">Heading (span)</label><input type="text" class="form-control" name="content[success_features][heading_span]" value="{{ data_get($c, 'success_features.heading_span') }}"></div>
                <div class="col-md-4"><label class="form-label">Button label</label><input type="text" class="form-control" name="content[success_features][button_label]" value="{{ data_get($c, 'success_features.button_label') }}"></div>
                @for($s = 0; $s < 8; $s++)
                    <div class="col-md-6 border-top pt-2">
                        <strong>Item {{ $s + 1 }}</strong>
                        @php $succImgUrl = data_get($c, "success_features.items.$s.image"); @endphp
                        @if($succImgUrl)
                            <input type="hidden" name="content[success_features][items][{{ $s }}][image]" value="{{ $succImgUrl }}">
                        @endif
                        <input type="file" name="file_success_item_{{ $s }}" class="form-control form-control-sm my-1" accept="image/*">
                        @if($succImgUrl)
                            <small class="text-muted d-block">Current: <a href="{{ $succImgUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_success_item_{{ $s }}" value="0">
                            <div class="form-check mt-1 mb-2">
                                <input class="form-check-input" type="checkbox" name="remove_success_item_{{ $s }}" id="remove_success_item_{{ $s }}" value="1" @checked(old('remove_success_item_'.$s) == '1')>
                                <label class="form-check-label small" for="remove_success_item_{{ $s }}">Remove image</label>
                            </div>
                        @endif
                        <input type="text" class="form-control form-control-sm mb-1" placeholder="Title" name="content[success_features][items][{{ $s }}][title]" value="{{ data_get($c, "success_features.items.$s.title") }}">
                        <textarea class="form-control form-control-sm" name="content[success_features][items][{{ $s }}][description]" rows="2" placeholder="Description">{{ data_get($c, "success_features.items.$s.description") }}</textarea>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    @php
        $platRowLogos = old('content.platform_logos_row.logos', data_get($c, 'platform_logos_row.logos', []));
        if (! is_array($platRowLogos)) {
            $platRowLogos = [];
        }
        $platRowUseDefault = old('content.platform_logos_row.use_default_platform_logos', data_get($c, 'platform_logos_row.use_default_platform_logos', true));
        $platRowUseDefaultOn = $platRowUseDefault === true || $platRowUseDefault === 1 || $platRowUseDefault === '1';
        $platRowKeys = array_map('intval', array_keys($platRowLogos));
        $platRowNextKey = $platRowKeys === [] ? 0 : max($platRowKeys) + 1;
    @endphp
    {{-- Platform section --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secPlat">9. Platform integration</button></h2>
        <div id="secPlat" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-md-6"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[platform_section][heading]" value="{{ data_get($c, 'platform_section.heading') }}"></div>
                <div class="col-md-6"><label class="form-label">Heading highlight</label><input type="text" class="form-control" name="content[platform_section][heading_highlight]" value="{{ data_get($c, 'platform_section.heading_highlight') }}"></div>
                <div class="col-12"><label class="form-label">Paragraph 1</label><textarea class="form-control" name="content[platform_section][paragraphs][0]" rows="2">{{ data_get($c, 'platform_section.paragraphs.0') }}</textarea></div>
                <div class="col-12"><label class="form-label">Paragraph 2</label><textarea class="form-control" name="content[platform_section][paragraphs][1]" rows="2">{{ data_get($c, 'platform_section.paragraphs.1') }}</textarea></div>
                <div class="col-md-6">
                    <label class="form-label">Side image</label>
                    @php $platSideUrl = data_get($c, 'platform_section.side_image'); @endphp
                    @if($platSideUrl)
                        <input type="hidden" name="content[platform_section][side_image]" value="{{ $platSideUrl }}">
                    @endif
                    <input type="file" name="file_platform_side" class="form-control" accept="image/*">
                    @if($platSideUrl)
                        <div class="mt-2">
                            <small class="text-muted d-block">Current: <a href="{{ $platSideUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_platform_side_image" value="0">
                            <div class="form-check mt-2 mb-0">
                                <input class="form-check-input" type="checkbox" name="remove_platform_side_image" id="remove_platform_side_image" value="1" @checked(old('remove_platform_side_image') == '1')>
                                <label class="form-check-label" for="remove_platform_side_image">Remove current image</label>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-3"><label class="form-label">Button label</label><input type="text" class="form-control" name="content[platform_section][button_label]" value="{{ data_get($c, 'platform_section.button_label') }}"></div>
                <div class="col-md-3"><label class="form-label">Phone</label><input type="text" class="form-control" name="content[platform_section][phone]" value="{{ data_get($c, 'platform_section.phone') }}"></div>
                <div class="col-12">
                    <label class="form-label">Platform logos (row)</label>
                    <input type="hidden" name="content[platform_logos_row][use_default_platform_logos]" value="0">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="content[platform_logos_row][use_default_platform_logos]" id="plat_row_use_default" value="1" @checked($platRowUseDefaultOn)>
                        <label class="form-check-label" for="plat_row_use_default">Use theme default platform logos (static slider from <code>assets/img/platforms/*.webp</code>)</label>
                    </div>
                    <div id="plat-row-custom-logos-wrap" class="border rounded p-3 bg-light" style="{{ $platRowUseDefaultOn ? 'display:none' : '' }}">
                        <p class="text-muted small mb-2">Same as “As featured in”: add or remove rows; upload or paste URL per logo.</p>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="plat-row-add-logo"><i class="bi bi-plus-lg"></i> Add logo</button>
                        <div id="plat-row-logo-rows" class="vstack gap-2">
                            @foreach($platRowLogos as $idx => $platUrl)
                                @php $idx = (int) $idx; @endphp
                                <div class="border rounded p-3 bg-white plat-row-logo-row" data-plat-row-idx="{{ $idx }}">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="small fw-semibold text-muted">Logo {{ $loop->iteration }}</span>
                                        <button type="button" class="btn btn-sm btn-outline-danger plat-row-remove-logo">Remove row</button>
                                    </div>
                                    <input type="file" name="file_platform_row_logo[{{ $idx }}]" class="form-control form-control-sm mb-2" accept="image/*">
                                    @if($platUrl)
                                        <small class="text-muted d-block mb-2">Current: <a href="{{ $platUrl }}" target="_blank">view</a></small>
                                        <input type="hidden" name="remove_platform_row_logo[{{ $idx }}]" value="0">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" name="remove_platform_row_logo[{{ $idx }}]" id="remove_platform_row_logo_{{ $idx }}" value="1" @checked(old('remove_platform_row_logo.'.$idx) == '1')>
                                            <label class="form-check-label small" for="remove_platform_row_logo_{{ $idx }}">Remove image</label>
                                        </div>
                                    @endif
                                    <label class="form-label small text-muted mb-0">Or paste URL</label>
                                    <input type="text" class="form-control form-control-sm" name="content[platform_logos_row][logos][{{ $idx }}]" placeholder="https://… or /storage/…" value="{{ $platUrl }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Secondary --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secSec">10. Secondary section</button></h2>
        <div id="secSec" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-md-5">
                    <label class="form-label">Left image</label>
                    @php $secImgUrl = data_get($c, 'secondary_section.image'); @endphp
                    @if($secImgUrl)
                        <input type="hidden" name="content[secondary_section][image]" value="{{ $secImgUrl }}">
                    @endif
                    <input type="file" name="file_secondary_image" class="form-control" accept="image/*">
                    @if($secImgUrl)
                        <div class="mt-2">
                            <small class="text-muted d-block">Current: <a href="{{ $secImgUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_secondary_image" value="0">
                            <div class="form-check mt-2 mb-0">
                                <input class="form-check-input" type="checkbox" name="remove_secondary_image" id="remove_secondary_image" value="1" @checked(old('remove_secondary_image') == '1')>
                                <label class="form-check-label" for="remove_secondary_image">Remove current image</label>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-7"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[secondary_section][heading]" value="{{ data_get($c, 'secondary_section.heading') }}"></div>
                <div class="col-md-7"><label class="form-label">Heading highlight</label><input type="text" class="form-control" name="content[secondary_section][heading_highlight]" value="{{ data_get($c, 'secondary_section.heading_highlight') }}"></div>
                <div class="col-12"><label class="form-label">Description</label><textarea class="form-control" name="content[secondary_section][description]" rows="3">{{ data_get($c, 'secondary_section.description') }}</textarea></div>
                <div class="col-md-4"><label class="form-label">Button label</label><input type="text" class="form-control" name="content[secondary_section][button_label]" value="{{ data_get($c, 'secondary_section.button_label') }}"></div>
                <div class="col-md-4"><label class="form-label">Phone</label><input type="text" class="form-control" name="content[secondary_section][phone]" value="{{ data_get($c, 'secondary_section.phone') }}"></div>
            </div>
        </div>
    </div>

    {{-- Process --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secProc">11. 4-step process</button></h2>
        <div id="secProc" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-12"><label class="form-label">Section heading</label><input type="text" class="form-control" name="content[process][heading]" value="{{ data_get($c, 'process.heading') }}"></div>
                <div class="col-12"><label class="form-label">Section description</label><textarea class="form-control" name="content[process][description]" rows="2">{{ data_get($c, 'process.description') }}</textarea></div>
                <div class="col-md-4">
                    <label class="form-label">Center logo</label>
                    @php $procLogoUrl = data_get($c, 'process.center_logo'); @endphp
                    @if($procLogoUrl)
                        <input type="hidden" name="content[process][center_logo]" value="{{ $procLogoUrl }}">
                    @endif
                    <input type="file" name="file_process_center_logo" class="form-control" accept="image/*">
                    @if($procLogoUrl)
                        <div class="mt-2">
                            <small class="text-muted d-block">Current: <a href="{{ $procLogoUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_process_center_logo" value="0">
                            <div class="form-check mt-2 mb-0">
                                <input class="form-check-input" type="checkbox" name="remove_process_center_logo" id="remove_process_center_logo" value="1" @checked(old('remove_process_center_logo') == '1')>
                                <label class="form-check-label" for="remove_process_center_logo">Remove current image</label>
                            </div>
                        </div>
                    @endif
                </div>
                @for($st = 0; $st < 4; $st++)
                    <div class="col-md-6 border rounded p-2">
                        <strong>Step {{ $st + 1 }}</strong>
                        <input type="text" class="form-control form-control-sm my-1" placeholder="Number" name="content[process][steps][{{ $st }}][number]" value="{{ data_get($c, "process.steps.$st.number") }}">
                        <input type="text" class="form-control form-control-sm my-1" placeholder="Title" name="content[process][steps][{{ $st }}][title]" value="{{ data_get($c, "process.steps.$st.title") }}">
                        <textarea class="form-control form-control-sm" name="content[process][steps][{{ $st }}][description]" rows="2" placeholder="Description">{{ data_get($c, "process.steps.$st.description") }}</textarea>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Portfolio --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secPort">12. Portfolio</button></h2>
        <div id="secPort" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-12"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[portfolio][heading]" value="{{ data_get($c, 'portfolio.heading') }}"></div>
                <div class="col-12"><label class="form-label">Description</label><textarea class="form-control" name="content[portfolio][description]" rows="2">{{ data_get($c, 'portfolio.description') }}</textarea></div>
                <div class="col-12">
                    <label class="form-label">Add portfolio images (append)</label>
                    <input type="file" name="portfolio_images[]" class="form-control" accept="image/*" multiple>
                    @php $pimgs = data_get($c, 'portfolio.images', []) @endphp
                    @if(!empty($pimgs))
                        @foreach($pimgs as $pix => $pi)
                            @if($pi)
                                <input type="hidden" name="content[portfolio][images][{{ $pix }}]" value="{{ $pi }}">
                            @endif
                        @endforeach
                        <p class="small mt-2 mb-0">Existing images:</p>
                        <ul class="small">
                            @foreach($pimgs as $pi)
                                <li><a href="{{ $pi }}" target="_blank">{{ Str::limit($pi, 60) }}</a></li>
                            @endforeach
                        </ul>
                        <input type="hidden" name="remove_portfolio_images" value="0">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="remove_portfolio_images" id="remove_portfolio_images" value="1" @checked(old('remove_portfolio_images') == '1')>
                            <label class="form-check-label" for="remove_portfolio_images">Remove all existing portfolio images</label>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonials --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secTest">13. Testimonials</button></h2>
        <div id="secTest" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-md-4"><label class="form-label">Heading</label><input type="text" class="form-control" name="content[testimonials][heading]" value="{{ data_get($c, 'testimonials.heading') }}"></div>
                <div class="col-md-8"><label class="form-label">Sidebar text</label><textarea class="form-control" name="content[testimonials][sidebar_text]" rows="2">{{ data_get($c, 'testimonials.sidebar_text') }}</textarea></div>
                @for($ti = 0; $ti < 6; $ti++)
                    <div class="col-md-6">
                        <label class="form-label">Review {{ $ti + 1 }}</label>
                        <textarea class="form-control mb-1" name="content[testimonials][items][{{ $ti }}][quote]" rows="3" placeholder="Quote">{{ data_get($c, "testimonials.items.$ti.quote") }}</textarea>
                        <input type="text" class="form-control" placeholder="Author name" name="content[testimonials][items][{{ $ti }}][author]" value="{{ data_get($c, "testimonials.items.$ti.author") }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>

    @php
        $faqItems = old('content.faq.items', data_get($c, 'faq.items', []));
        if (! is_array($faqItems)) {
            $faqItems = [];
        }
        $faqItems = array_values(array_filter($faqItems, static function ($row) {
            return is_array($row);
        }));
        if ($faqItems === []) {
            $faqItems = [['question' => '', 'answer' => '']];
        }
        $faqNextKey = count($faqItems);
    @endphp
    {{-- FAQ --}}
    <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#secFaq">14. FAQ (accordion)</button></h2>
        <div id="secFaq" class="accordion-collapse collapse" data-bs-parent="#svcSections">
            <div class="accordion-body row g-3">
                <div class="col-12"><label class="form-label">Section heading</label><input type="text" class="form-control" name="content[faq][heading]" value="{{ data_get($c, 'faq.heading') }}"></div>
                <div class="col-md-6">
                    <label class="form-label">Right column image</label>
                    @php $faqImgUrl = data_get($c, 'faq.side_image'); @endphp
                    @if($faqImgUrl)
                        <input type="hidden" name="content[faq][side_image]" value="{{ $faqImgUrl }}">
                    @endif
                    <input type="file" name="file_faq_side_image" class="form-control" accept="image/*">
                    @if($faqImgUrl)
                        <div class="mt-2">
                            <small class="text-muted d-block">Current: <a href="{{ $faqImgUrl }}" target="_blank">view</a></small>
                            <input type="hidden" name="remove_faq_side_image" value="0">
                            <div class="form-check mt-2 mb-0">
                                <input class="form-check-input" type="checkbox" name="remove_faq_side_image" id="remove_faq_side_image" value="1" @checked(old('remove_faq_side_image') == '1')>
                                <label class="form-check-label" for="remove_faq_side_image">Remove current image</label>
                            </div>
                        </div>
                    @endif
                    <small class="text-muted d-block mt-1">If empty, the theme default image is used on the site.</small>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="text-muted small mb-0">Questions/answers can be added, edited, or removed. Empty question rows are ignored on frontend.</p>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="faq-add-row"><i class="bi bi-plus-lg"></i> Add question</button>
                    </div>
                    <div id="faq-rows" class="row g-3">
                        @foreach($faqItems as $fi => $faq)
                            @php $fi = (int) $fi; @endphp
                            <div class="col-md-6 faq-row" data-faq-idx="{{ $fi }}">
                                <div class="border rounded p-2 h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <strong class="small text-muted">FAQ {{ $loop->iteration }}</strong>
                                        <button type="button" class="btn btn-sm btn-outline-danger faq-remove-row">Remove</button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm my-1 faq-question" placeholder="Question" name="content[faq][items][{{ $fi }}][question]" value="{{ (string) ($faq['question'] ?? '') }}">
                                    <textarea class="form-control form-control-sm faq-answer" name="content[faq][items][{{ $fi }}][answer]" rows="3" placeholder="Answer">{{ (string) ($faq['answer'] ?? '') }}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var wrap = document.getElementById('feat-custom-logos-wrap');
    var rows = document.getElementById('feat-logo-rows');
    var addBtn = document.getElementById('feat-add-logo-row');
    var defCb = document.getElementById('feat_use_default');
    var nextKey = {{ (int) $featNextKey }};

    function rowHtml(i) {
        return '<div class="border rounded p-3 bg-white feat-logo-row" data-feat-idx="' + i + '">' +
            '<div class="d-flex justify-content-between align-items-center mb-2">' +
            '<span class="small fw-semibold text-muted">Logo</span>' +
            '<button type="button" class="btn btn-sm btn-outline-danger feat-remove-logo-row">Remove row</button></div>' +
            '<input type="file" name="file_featured_logo[' + i + ']" class="form-control form-control-sm mb-2" accept="image/*">' +
            '<label class="form-label small text-muted mb-0">Or paste URL</label>' +
            '<input type="text" class="form-control form-control-sm" name="content[featured_in][logos][' + i + ']" placeholder="https://…">' +
            '</div>';
    }

    if (addBtn && rows) {
        addBtn.addEventListener('click', function () {
            rows.insertAdjacentHTML('beforeend', rowHtml(nextKey));
            nextKey += 1;
        });
    }
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('feat-remove-logo-row')) {
            e.preventDefault();
            var row = e.target.closest('.feat-logo-row');
            if (row) {
                row.remove();
            }
        }
    });
    if (defCb && wrap) {
        defCb.addEventListener('change', function () {
            wrap.style.display = this.checked ? 'none' : 'block';
        });
    }
})();

(function () {
    var wrap = document.getElementById('plat-row-custom-logos-wrap');
    var rows = document.getElementById('plat-row-logo-rows');
    var addBtn = document.getElementById('plat-row-add-logo');
    var defCb = document.getElementById('plat_row_use_default');
    var nextKey = {{ (int) $platRowNextKey }};

    function rowHtml(i) {
        return '<div class="border rounded p-3 bg-white plat-row-logo-row" data-plat-row-idx="' + i + '">' +
            '<div class="d-flex justify-content-between align-items-center mb-2">' +
            '<span class="small fw-semibold text-muted">Logo</span>' +
            '<button type="button" class="btn btn-sm btn-outline-danger plat-row-remove-logo">Remove row</button></div>' +
            '<input type="file" name="file_platform_row_logo[' + i + ']" class="form-control form-control-sm mb-2" accept="image/*">' +
            '<label class="form-label small text-muted mb-0">Or paste URL</label>' +
            '<input type="text" class="form-control form-control-sm" name="content[platform_logos_row][logos][' + i + ']" placeholder="https://…">' +
            '</div>';
    }

    if (addBtn && rows) {
        addBtn.addEventListener('click', function () {
            rows.insertAdjacentHTML('beforeend', rowHtml(nextKey));
            nextKey += 1;
        });
    }
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('plat-row-remove-logo')) {
            e.preventDefault();
            var row = e.target.closest('.plat-row-logo-row');
            if (row) {
                row.remove();
            }
        }
    });
    if (defCb && wrap) {
        defCb.addEventListener('change', function () {
            wrap.style.display = this.checked ? 'none' : 'block';
        });
    }
})();

(function () {
    var rows = document.getElementById('faq-rows');
    var addBtn = document.getElementById('faq-add-row');
    var nextKey = {{ (int) $faqNextKey }};

    function faqRowHtml(i) {
        return '<div class="col-md-6 faq-row" data-faq-idx="' + i + '">' +
            '<div class="border rounded p-2 h-100">' +
            '<div class="d-flex justify-content-between align-items-center mb-1">' +
            '<strong class="small text-muted">FAQ</strong>' +
            '<button type="button" class="btn btn-sm btn-outline-danger faq-remove-row">Remove</button>' +
            '</div>' +
            '<input type="text" class="form-control form-control-sm my-1 faq-question" placeholder="Question" name="content[faq][items][' + i + '][question]">' +
            '<textarea class="form-control form-control-sm faq-answer" name="content[faq][items][' + i + '][answer]" rows="3" placeholder="Answer"></textarea>' +
            '</div>' +
            '</div>';
    }

    function relabelFaqRows() {
        var nodes = rows ? rows.querySelectorAll('.faq-row') : [];
        nodes.forEach(function (node, idx) {
            var title = node.querySelector('strong');
            if (title) {
                title.textContent = 'FAQ ' + (idx + 1);
            }
        });
    }

    if (addBtn && rows) {
        addBtn.addEventListener('click', function () {
            rows.insertAdjacentHTML('beforeend', faqRowHtml(nextKey));
            nextKey += 1;
            relabelFaqRows();
        });
    }

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('faq-remove-row')) {
            e.preventDefault();
            var row = e.target.closest('.faq-row');
            if (row) {
                row.remove();
                relabelFaqRows();
            }
        }
    });

    relabelFaqRows();
})();
</script>

<div class="d-flex gap-2 mb-5">
    <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-save"></i> Save service page</button>
    <a href="{{ route('admin.brands.services.index', $brand) }}" class="btn btn-secondary btn-lg">Cancel</a>
</div>
