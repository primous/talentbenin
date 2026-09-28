@if($submitted)
{{-- ===== SUCCESS SCREEN ===== --}}
<div class="postuler-success" x-data="{}" x-init="window.scrollTo({top:0,behavior:'smooth'})">
    <div class="success-confetti">
        <div class="confetti-icon">🎉</div>
        <h1>Candidature envoyée !</h1>
        <p>Votre candidature a été soumise avec succès. Un email de confirmation a été envoyé à <strong>{{ $email }}</strong>.</p>
        <div class="success-ref">
            <span class="label">Votre référence</span>
            <span class="ref-code">{{ $submittedReference }}</span>
        </div>
        <p class="success-note">Notre équipe examinera votre dossier dans les <strong>5 à 10 jours ouvrables</strong>. Conservez votre référence pour suivre votre candidature.</p>
        <a href="{{ url('/') }}" class="btn-success-home">← Retour à l'accueil</a>
    </div>
</div>

@else
{{-- ===== MULTI-STEP FORM ===== --}}
<div class="postuler-wrapper" x-data="{ step: {{ $currentStep }} }">

    {{-- MINIMALIST STEPPER (IMAGE 2 STYLE) --}}
    <div class="minimal-stepper-container">
        <div class="minimal-stepper-track">
            <div class="minimal-stepper-fill" style="width: {{ (($currentStep - 1) / ($totalSteps - 1)) * 100 }}%"></div>
        </div>
        <div class="minimal-stepper-steps">
            @for($n = 1; $n <= $totalSteps; $n++)
                <button
                    type="button"
                    wire:click="goToStep({{ $n }})"
                    class="minimal-step-node {{ $currentStep == $n ? 'active' : '' }} {{ $currentStep > $n ? 'done' : '' }}"
                    @if($currentStep <= $n) disabled @endif
                    title="Étape {{ $n }}"
                >
                    <span class="node-bullet"></span>
                </button>
            @endfor
        </div>
        <div class="minimal-step-label-row">
            <span class="step-badge">Étape {{ $currentStep }} sur {{ $totalSteps }}</span>
        </div>
    </div>

    {{-- FORM CONTENT --}}
    <form wire:submit="submitApplication" class="postuler-form">

        {{-- VALIDATION ERRORS --}}
        @if($errors->any())
        <div class="alert-errors" x-data="{}" x-init="$el.scrollIntoView({ behavior: 'smooth', block: 'center' })">
            <div class="alert-icon">⚠️</div>
            <div>
                <strong>Veuillez compléter ou corriger les champs requis :</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        {{-- ==================== STEP 1 : Informations personnelles (Image 2 style) ==================== --}}
        @if($currentStep === 1)
        <div class="form-step">
            <div class="step-heading-minimal">
                <h2 class="form-title">Commençons</h2>
                <p class="form-subtitle">Renseignez vos coordonnées de base pour initialiser votre profil de talent.</p>
            </div>

            <div class="photo-upload-zone" wire:click="$dispatch('click-upload')">
                @if($profile_photo)
                    <img src="{{ $profile_photo->temporaryUrl() }}" class="photo-preview" alt="Photo de profil">
                @else
                    <div class="photo-placeholder">
                        <span class="photo-icon">📷</span>
                        <span class="photo-title">Photo de profil</span>
                        <span class="photo-hint">JPG, PNG · max 2Mo (optionnel)</span>
                    </div>
                @endif
                <input type="file" wire:model="profile_photo" id="profile_photo_input" accept="image/*" style="position:absolute;inset:0;opacity:0;cursor:pointer;">
            </div>
            @error('profile_photo')<span class="field-error">{{ $message }}</span>@enderror

            <div class="form-grid-2">
                <div class="field-group">
                    <label for="first_name">Prénom <span class="required">*</span></label>
                    <input type="text" id="first_name" wire:model.live="first_name" placeholder="Ex: Koffi" class="{{ $errors->has('first_name') ? 'input-error' : '' }}">
                    @error('first_name')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="field-group">
                    <label for="last_name">Nom de famille <span class="required">*</span></label>
                    <input type="text" id="last_name" wire:model.live="last_name" placeholder="Ex: Dossou" class="{{ $errors->has('last_name') ? 'input-error' : '' }}">
                    @error('last_name')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="field-group">
                <label for="email">Adresse email <span class="required">*</span></label>
                <input type="email" id="email" wire:model.live="email" placeholder="koffi.dossou@example.com" class="{{ $errors->has('email') ? 'input-error' : '' }}">
                @error('email')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="form-grid-2">
                <div class="field-group">
                    <label for="city">Pays / Ville ou Localité <span class="required">*</span></label>
                    <input type="text" id="city" wire:model.live="city" placeholder="Cotonou, Bénin" class="{{ $errors->has('city') ? 'input-error' : '' }}">
                    @error('city')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="field-group">
                    <label for="age_range">Tranche d'âge <span class="required">*</span></label>
                    <select id="age_range" wire:model.live="age_range" class="{{ $errors->has('age_range') ? 'input-error' : '' }}">
                        <option value="">Sélectionner...</option>
                        @foreach($ageRanges as $range)
                            <option value="{{ $range }}">{{ $range }}</option>
                        @endforeach
                    </select>
                    @error('age_range')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="field-group">
                <label for="phone">Numéro de téléphone <span class="required">*</span></label>
                <input type="tel" id="phone" wire:model.live="phone" placeholder="+229 97 00 00 00" class="{{ $errors->has('phone') ? 'input-error' : '' }}">
                @error('phone')<span class="field-error">{{ $message }}</span>@enderror
            </div>
        </div>
        @endif

        {{-- ==================== STEP 2 : Profil professionnel ==================== --}}
        @if($currentStep === 2)
        <div class="form-step">
            <div class="step-heading-minimal">
                <h2 class="form-title">Profil & Expertise</h2>
                <p class="form-subtitle">Détaillez vos domaines de compétences et votre parcours professionnel.</p>
            </div>

            <div class="field-group">
                <label for="primary_activity">Votre activité principale <span class="required">*</span></label>
                <input type="text" id="primary_activity" wire:model.live="primary_activity" placeholder="Ex: Designer UX/UI, Développeur web, Photographe..." class="{{ $errors->has('primary_activity') ? 'input-error' : '' }}">
                @error('primary_activity')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="form-grid-2">
                <div class="field-group">
                    <label for="current_status">Statut actuel <span class="required">*</span></label>
                    <select id="current_status" wire:model.live="current_status" class="{{ $errors->has('current_status') ? 'input-error' : '' }}">
                        <option value="">Sélectionner...</option>
                        @foreach($statuses as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('current_status')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="field-group">
                    <label for="experience_duration">Années d'expérience <span class="required">*</span></label>
                    <select id="experience_duration" wire:model.live="experience_duration" class="{{ $errors->has('experience_duration') ? 'input-error' : '' }}">
                        <option value="">Sélectionner...</option>
                        @foreach($experienceDurations as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('experience_duration')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="field-group">
                <label for="featured_achievement">Votre réalisation la plus marquante <span class="required">*</span></label>
                <textarea id="featured_achievement" wire:model.live="featured_achievement" rows="4" placeholder="Décrivez en quelques lignes votre plus belle réussite professionnelle ou personnelle..." class="{{ $errors->has('featured_achievement') ? 'input-error' : '' }}"></textarea>
                <span class="field-hint">{{ strlen($featured_achievement) }}/500 caractères</span>
                @error('featured_achievement')<span class="field-error">{{ $message }}</span>@enderror
            </div>



            <div class="field-group">
                <label>Catégorie(s) de talent (optionnel)</label>
                <div class="tags-grid">
                    @foreach($categories as $category)
                        <label class="tag-choice category {{ in_array($category->id, $selected_categories) ? 'selected' : '' }}">
                            <input type="checkbox" wire:model.live="selected_categories" value="{{ $category->id }}" style="display:none">
                            {{ $category->icon ?? '' }} {{ $category->name }}
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ==================== STEP 3 : Réalisations / Portfolio ==================== --}}
        @if($currentStep === 3)
        <div class="form-step">
            <div class="step-heading-minimal">
                <h2 class="form-title">Réalisations & Portfolio</h2>
                <p class="form-subtitle">Présentez vos réalisations phares pour faire la différence auprès des recruteurs.</p>
            </div>

            @if(count($projects) === 0)
            <div class="no-projects-hint">
                <div class="hint-icon">📁</div>
                <p>Vous n'avez pas encore ajouté de projet. C'est optionnel mais fortement recommandé !</p>
            </div>
            @endif

            @foreach($projects as $index => $project)
            <div class="project-card" wire:key="project-{{ $index }}">
                <div class="project-card-header">
                    <span class="project-number">Projet {{ $index + 1 }}</span>
                    <button type="button" wire:click="removeProject({{ $index }})" class="btn-remove">🗑️ Supprimer</button>
                </div>
                <div class="form-grid-2">
                    <div class="field-group">
                        <label>Titre du projet</label>
                        <input type="text" wire:model.live="projects.{{ $index }}.title" placeholder="Ex: Application de livraison...">
                    </div>
                    <div class="field-group">
                        <label>Type</label>
                        <select wire:model.live="projects.{{ $index }}.type">
                            <option value="project">Projet</option>
                            <option value="artwork">Œuvre artistique</option>
                            <option value="publication">Publication</option>
                            <option value="award">Récompense</option>
                            <option value="collaboration">Collaboration</option>
                        </select>
                    </div>
                </div>
                <div class="field-group">
                    <label>Description courte</label>
                    <textarea wire:model.live="projects.{{ $index }}.description" rows="2" placeholder="Expliquez brièvement ce projet..."></textarea>
                </div>
                <div class="field-group">
                    <label>Lien (URL) — optionnel</label>
                    <input type="url" wire:model.live="projects.{{ $index }}.url" placeholder="https://...">
                </div>
            </div>
            @endforeach

            @if(count($projects) < 5)
            <button type="button" wire:click="addProject" class="btn-add-project">
                <span>+</span> Ajouter un projet / réalisation
            </button>
            @endif
        </div>
        @endif

        {{-- ==================== STEP 4 : Présence en ligne ==================== --}}
        @if($currentStep === 4)
        <div class="form-step">
            <div class="step-heading-minimal">
                <h2 class="form-title">Présence en ligne</h2>
                <p class="form-subtitle">Partagez vos profils et plateformes où l'on peut explorer vos travaux.</p>
            </div>

            <div class="form-grid-2">
                <div class="field-group">
                    <label><span class="social-icon linkedin">in</span> LinkedIn</label>
                    <input type="url" wire:model.live="linkedin_url" placeholder="https://linkedin.com/in/..." class="{{ $errors->has('linkedin_url') ? 'input-error' : '' }}">
                    @error('linkedin_url')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="field-group">
                    <label><span class="social-icon instagram">📷</span> Instagram</label>
                    <input type="url" wire:model.live="instagram_url" placeholder="https://instagram.com/..." class="{{ $errors->has('instagram_url') ? 'input-error' : '' }}">
                    @error('instagram_url')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="form-grid-2">
                <div class="field-group">
                    <label><span class="social-icon facebook">f</span> Facebook</label>
                    <input type="url" wire:model.live="facebook_url" placeholder="https://facebook.com/..." class="{{ $errors->has('facebook_url') ? 'input-error' : '' }}">
                    @error('facebook_url')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="field-group">
                    <label><span class="social-icon twitter">𝕏</span> Twitter / X</label>
                    <input type="url" wire:model.live="twitter_url" placeholder="https://x.com/..." class="{{ $errors->has('twitter_url') ? 'input-error' : '' }}">
                    @error('twitter_url')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="field-group">
                <label>🔗 Site web / Portfolio</label>
                <input type="url" wire:model.live="website_url" placeholder="https://monportfolio.com" class="{{ $errors->has('website_url') ? 'input-error' : '' }}">
                @error('website_url')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="online-earnings-section">
                <label class="toggle-label">
                    <input type="checkbox" wire:model.live="has_online_earnings" id="has_online_earnings">
                    <div class="toggle-box">
                        <span class="toggle-knob"></span>
                    </div>
                    <span>Je génère déjà des revenus grâce à mes activités en ligne</span>
                </label>

                @if($has_online_earnings)
                <div class="earnings-fields">
                    <div class="form-grid-2">
                        <div class="field-group">
                            <label>Type d'activité génératrice de revenus</label>
                            <input type="text" wire:model.live="online_activity_type" placeholder="Ex: Freelance, vente en ligne, contenu...">
                        </div>
                        <div class="field-group">
                            <label>Revenus mensuels approximatifs</label>
                            <select wire:model.live="approximate_earnings">
                                <option value="">Sélectionner...</option>
                                <option value="moins_50k">Moins de 50 000 FCFA</option>
                                <option value="50k_150k">50 000 – 150 000 FCFA</option>
                                <option value="150k_300k">150 000 – 300 000 FCFA</option>
                                <option value="300k_500k">300 000 – 500 000 FCFA</option>
                                <option value="plus_500k">Plus de 500 000 FCFA</option>
                            </select>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif

        {{-- ==================== STEP 5 : Objectifs & Opportunités ==================== --}}
        @if($currentStep === 5)
        <div class="form-step">
            <div class="step-heading-minimal">
                <h2 class="form-title">Disponibilité & Ambitions</h2>
                <p class="form-subtitle">Indiquez votre rythme souhaité et vos motivations pour rejoindre le club.</p>
            </div>

            <div class="field-group">
                <label>Pourquoi souhaitez-vous rejoindre Talent Club ? <span class="required">*</span> (3 max)</label>
                <div class="tags-grid reason-tags">
                    @foreach($reasonsList as $key => $label)
                        <button type="button"
                            wire:click="toggleReason('{{ $key }}')"
                            class="reason-tag {{ in_array($key, $reasons_to_join) ? 'selected' : '' }} {{ !in_array($key, $reasons_to_join) && count($reasons_to_join) >= 3 ? 'disabled' : '' }}"
                        >{{ $label }}</button>
                    @endforeach
                </div>
            </div>

            <div class="field-group">
                <label for="primary_goal">Votre objectif principal sur Talent Club <span class="required">*</span></label>
                <textarea id="primary_goal" wire:model.live="primary_goal" rows="3" placeholder="Que voulez-vous accomplir grâce à Talent Club ?" class="{{ $errors->has('primary_goal') ? 'input-error' : '' }}"></textarea>
                @error('primary_goal')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="field-group">
                <label for="next_big_goal">Votre prochain grand défi personnel ou professionnel <span class="required">*</span></label>
                <textarea id="next_big_goal" wire:model.live="next_big_goal" rows="3" placeholder="Quel est le prochain grand cap que vous voulez franchir ?" class="{{ $errors->has('next_big_goal') ? 'input-error' : '' }}"></textarea>
                @error('next_big_goal')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="form-grid-2">
                <div class="field-group">
                    <label for="current_main_activity">Votre activité principale actuelle <span class="required">*</span></label>
                    <textarea id="current_main_activity" wire:model.live="current_main_activity" rows="2" placeholder="Sur quoi travaillez-vous en ce moment ?" class="{{ $errors->has('current_main_activity') ? 'input-error' : '' }}"></textarea>
                    @error('current_main_activity')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="field-group">
                    <label for="current_challenge">Votre défi actuel <span class="required">*</span></label>
                    <textarea id="current_challenge" wire:model.live="current_challenge" rows="2" placeholder="Quelle est votre principale difficulté actuelle ?" class="{{ $errors->has('current_challenge') ? 'input-error' : '' }}"></textarea>
                    @error('current_challenge')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="field-group">
                <label>Opportunités recherchées (optionnel)</label>
                <div class="tags-grid">
                    @foreach($opportunitiesList as $key => $label)
                        <button type="button"
                            wire:click="toggleOpportunity('{{ $key }}')"
                            class="tag-choice {{ in_array($key, $desired_opportunities) ? 'selected' : '' }}"
                        >{{ $label }}</button>
                    @endforeach
                </div>
            </div>

            <div class="field-group">
                <label for="availability">Votre disponibilité <span class="required">*</span></label>
                <select id="availability" wire:model.live="availability" class="{{ $errors->has('availability') ? 'input-error' : '' }}">
                    <option value="">Sélectionner...</option>
                    @foreach($availabilities as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
                @error('availability')<span class="field-error">{{ $message }}</span>@enderror
            </div>
        </div>
        @endif

        {{-- ==================== STEP 6 : Vérification & Soumission ==================== --}}
        @if($currentStep === 6)
        <div class="form-step">
            <div class="step-heading-minimal">
                <h2 class="form-title">Vérification & Finalisation</h2>
                <p class="form-subtitle">Prenez un instant pour vérifier vos informations avant la soumission.</p>
            </div>

            <div class="review-sections">
                {{-- Identité --}}
                <div class="review-block">
                    <div class="review-block-header">
                        <span>👤 Identité</span>
                        <button type="button" wire:click="goToStep(1)" class="btn-edit-step">Modifier</button>
                    </div>
                    <div class="review-grid">
                        <div><span class="rl">Prénom</span><span class="rv">{{ $first_name }}</span></div>
                        <div><span class="rl">Nom</span><span class="rv">{{ $last_name }}</span></div>
                        <div><span class="rl">Email</span><span class="rv">{{ $email }}</span></div>
                        <div><span class="rl">Téléphone</span><span class="rv">{{ $phone }}</span></div>
                        <div><span class="rl">Ville</span><span class="rv">{{ $city }}</span></div>
                        <div><span class="rl">Âge</span><span class="rv">{{ $age_range }}</span></div>
                    </div>
                </div>

                {{-- Profil --}}
                <div class="review-block">
                    <div class="review-block-header">
                        <span>💼 Profil professionnel</span>
                        <button type="button" wire:click="goToStep(2)" class="btn-edit-step">Modifier</button>
                    </div>
                    <div class="review-grid">
                        <div><span class="rl">Activité</span><span class="rv">{{ $primary_activity }}</span></div>
                        <div><span class="rl">Statut</span><span class="rv">{{ $current_status }}</span></div>
                        <div><span class="rl">Expérience</span><span class="rv">{{ $experience_duration }}</span></div>
                    </div>
                    @if($featured_achievement)
                    <div class="review-text"><span class="rl">Réalisation phare :</span><br>{{ $featured_achievement }}</div>
                    @endif
                </div>

                {{-- Présence en ligne --}}
                @if($linkedin_url || $instagram_url || $website_url)
                <div class="review-block">
                    <div class="review-block-header">
                        <span>🌐 Présence en ligne</span>
                        <button type="button" wire:click="goToStep(4)" class="btn-edit-step">Modifier</button>
                    </div>
                    <div class="review-grid">
                        @if($linkedin_url)<div><span class="rl">LinkedIn</span><span class="rv">{{ $linkedin_url }}</span></div>@endif
                        @if($instagram_url)<div><span class="rl">Instagram</span><span class="rv">{{ $instagram_url }}</span></div>@endif
                        @if($website_url)<div><span class="rl">Site web</span><span class="rv">{{ $website_url }}</span></div>@endif
                    </div>
                </div>
                @endif

                {{-- Objectifs --}}
                <div class="review-block">
                    <div class="review-block-header">
                        <span>🎯 Objectifs</span>
                        <button type="button" wire:click="goToStep(5)" class="btn-edit-step">Modifier</button>
                    </div>
                    <div class="review-grid">
                        <div><span class="rl">Disponibilité</span><span class="rv">{{ $availability }}</span></div>
                    </div>
                    @if($primary_goal)
                    <div class="review-text"><span class="rl">Objectif principal :</span><br>{{ $primary_goal }}</div>
                    @endif
                </div>
            </div>

            {{-- CGV --}}
            <div class="cgv-block">
                <label class="cgv-label">
                    <input type="checkbox" wire:model.live="cgv_accepted" id="cgv_accepted" class="{{ $errors->has('cgv_accepted') ? 'input-error' : '' }}">
                    <span>Je certifie que les informations renseignées sont exactes et j'accepte les <a href="#" target="_blank">conditions générales d'utilisation</a> de Talent Club. Je comprends que ma candidature sera examinée par notre équipe avant toute décision.</span>
                </label>
                @error('cgv_accepted')<span class="field-error">{{ $message }}</span>@enderror
            </div>
        </div>
        @endif

        {{-- ===== NAVIGATION BUTTONS ===== --}}
        @if($errors->any())
        <div class="alert-errors-bottom" style="margin-top: 1.5rem; margin-bottom: 0.5rem; padding: 0.75rem 1rem; background: #FEF2F2; border: 1px solid #FECACA; border-radius: 12px; color: #991B1B; font-size: 0.85rem; display: flex; align-items: center; gap: 0.5rem;">
            <span>⚠️</span>
            <span>Veuillez compléter les informations requises ci-dessus avant de continuer.</span>
        </div>
        @endif

        <div class="form-nav">
            @if($currentStep > 1)
                <button type="button" wire:click="prevStep" class="btn-prev">
                    ← Précédent
                </button>
            @else
                <a href="{{ url('/') }}" class="btn-prev">← Accueil</a>
            @endif

            @if($currentStep < $totalSteps)
                <button type="button" wire:click="nextStep" class="btn-next" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="nextStep">Continuer →</span>
                    <span wire:loading wire:target="nextStep">Validation...</span>
                </button>
            @else
                <button type="submit" class="btn-submit" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="submitApplication">Postuler maintenant →</span>
                    <span wire:loading wire:target="submitApplication">⏳ Envoi en cours...</span>
                </button>
            @endif
        </div>

    </form>

</div>
@endif

<style>
/* Card Wrapper (Image 2 style: clean, airy, sleek border) */
.postuler-wrapper {
    max-width: 680px;
    margin: 1.5rem auto 3rem auto;
    background: #ffffff;
    border-radius: 28px;
    padding: 3rem 2.5rem;
    box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0,0,0,0.03);
    border: 1px solid #E2E8F0;
    font-family: 'Montserrat', sans-serif;
}
@media (max-width: 640px) {
    .postuler-wrapper {
        padding: 2rem 1.25rem;
        margin: 1rem auto 2rem auto;
        border-radius: 20px;
    }
}

/* Minimalist Stepper (Image 2 style) */
.minimal-stepper-container {
    position: relative;
    margin-bottom: 2.25rem;
    padding: 0 0.25rem;
}
.minimal-stepper-track {
    position: absolute;
    top: 8px;
    left: 0.5rem;
    right: 0.5rem;
    height: 2px;
    background: #E2E8F0;
    z-index: 1;
}
.minimal-stepper-fill {
    height: 100%;
    background: #A7C123;
    transition: width 0.35s ease;
}
.minimal-stepper-steps {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.minimal-step-node {
    background: none;
    border: none;
    padding: 2px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}
.minimal-step-node:disabled {
    cursor: default;
}
.node-bullet {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #CBD5E1;
    transition: all 0.25s ease;
    display: block;
}
.minimal-step-node.active .node-bullet {
    width: 14px;
    height: 14px;
    background: #A7C123;
    box-shadow: 0 0 0 3px #FFFFFF, 0 0 0 5px #242619;
}
.minimal-step-node.done .node-bullet {
    width: 10px;
    height: 10px;
    background: #242619;
}
.minimal-step-label-row {
    display: flex;
    justify-content: flex-end;
    margin-top: 0.75rem;
}
.step-badge {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #242619;
    background: #F1F7D7;
    padding: 0.2rem 0.65rem;
    border-radius: 9999px;
    border: 1px solid rgba(167, 193, 35, 0.3);
    font-family: 'Sora', sans-serif;
}

/* Headings (Image 2 style: "Let's get started") */
.step-heading-minimal {
    margin-bottom: 2rem;
}
.form-title {
    font-family: 'Sora', sans-serif;
    font-size: 1.65rem;
    font-weight: 800;
    color: #242619;
    letter-spacing: -0.02em;
    margin-bottom: 0.35rem;
}
.form-subtitle {
    font-size: 0.9rem;
    color: #64748B;
    line-height: 1.5;
}

/* Form Inputs & Grids (Image 2 style) */
.form-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem;
}
@media (max-width: 640px) {
    .form-grid-2 {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}
.field-group {
    margin-bottom: 1.25rem;
    display: flex;
    flex-direction: column;
}
.field-group label {
    font-size: 0.825rem;
    font-weight: 600;
    color: #475569;
    margin-bottom: 0.45rem;
    display: flex;
    align-items: center;
    gap: 0.35rem;
    font-family: inherit;
}
.required {
    color: #DC2626;
}
.field-group input[type="text"],
.field-group input[type="email"],
.field-group input[type="tel"],
.field-group input[type="url"],
.field-group select,
.field-group textarea {
    width: 100%;
    padding: 0.85rem 1.1rem;
    border-radius: 12px;
    border: 1.5px solid #E2E8F0;
    background: #FFFFFF;
    font-size: 0.925rem;
    color: #242619;
    transition: all 0.2s ease;
    outline: none;
    font-family: inherit;
    box-sizing: border-box;
}
.field-group input::placeholder,
.field-group textarea::placeholder {
    color: #94A3B8;
}
.field-group input:focus,
.field-group select:focus,
.field-group textarea:focus {
    border-color: #A7C123;
    box-shadow: 0 0 0 3px rgba(167, 193, 35, 0.18);
    background: #FFFFFF;
}
.input-error {
    border-color: #EF4444 !important;
    background-color: #FEF2F2 !important;
}
.field-error {
    font-size: 0.78rem;
    color: #EF4444;
    margin-top: 0.35rem;
    font-weight: 500;
}
.field-hint {
    font-size: 0.75rem;
    color: #94A3B8;
    margin-top: 0.25rem;
    text-align: right;
}

/* Photo Upload (Image 2 inspired clean avatar zone) */
.photo-upload-zone {
    position: relative;
    width: 110px;
    height: 110px;
    margin: 0 auto 1.75rem auto;
    border-radius: 24px;
    border: 2px dashed #CBD5E1;
    background: #F8FAF0;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.2s;
}
.photo-upload-zone:hover {
    border-color: #A7C123;
    background: #F1F7D7;
}
.photo-placeholder {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0.5rem;
    color: #64748B;
    pointer-events: none;
}
.photo-icon {
    font-size: 1.5rem;
    margin-bottom: 0.2rem;
}
.photo-title {
    font-size: 0.75rem;
    font-weight: 700;
    color: #242619;
}
.photo-hint {
    font-size: 0.65rem;
    color: #94A3B8;
    margin-top: 0.15rem;
}
.photo-preview {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Tags & Badges selection */
.tags-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-top: 0.35rem;
}
.tag-choice, .reason-tag {
    padding: 0.5rem 0.95rem;
    border-radius: 9999px;
    background: #F8FAFC;
    color: #334155;
    font-size: 0.825rem;
    font-weight: 600;
    border: 1px solid #E2E8F0;
    cursor: pointer;
    transition: all 0.15s ease;
    user-select: none;
}
.tag-choice:hover, .reason-tag:hover {
    background: #F1F5F9;
    color: #242619;
}
.tag-choice.selected, .reason-tag.selected {
    background: #242619;
    color: #D8F741;
    border-color: #A7C123;
    box-shadow: 0 2px 6px rgba(36, 38, 25, 0.2);
}
.reason-tag.disabled {
    opacity: 0.45;
    cursor: not-allowed;
}

/* Project Cards */
.no-projects-hint {
    background: #F8FAFC;
    border: 1px dashed #CBD5E1;
    border-radius: 12px;
    padding: 1.5rem;
    text-align: center;
    color: #64748B;
    font-size: 0.875rem;
    margin-bottom: 1.25rem;
}
.hint-icon {
    font-size: 1.75rem;
    margin-bottom: 0.35rem;
}
.project-card {
    background: #F8FAFC;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    padding: 1.25rem;
    margin-bottom: 1.25rem;
}
.project-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #E2E8F0;
}
.project-number {
    font-size: 0.85rem;
    font-weight: 700;
    color: #242619;
}
.btn-remove {
    background: none;
    border: none;
    color: #DC2626;
    font-size: 0.8rem;
    font-weight: 600;
    cursor: pointer;
}
.btn-add-project {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.25rem;
    background: #F8FAF0;
    border: 1.5px dashed #A7C123;
    border-radius: 12px;
    font-size: 0.875rem;
    font-weight: 600;
    color: #242619;
    cursor: pointer;
    transition: all 0.2s;
    width: 100%;
    justify-content: center;
}
.btn-add-project:hover {
    background: #F1F7D7;
    border-color: #242619;
    color: #242619;
}

/* Online earnings toggle */
.online-earnings-section {
    background: #F8FAF0;
    border: 1px solid rgba(167, 193, 35, 0.25);
    border-radius: 16px;
    padding: 1.25rem;
    margin-top: 1.5rem;
}
.toggle-label {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    font-size: 0.9rem;
    font-weight: 600;
    color: #242619;
}
.toggle-label input {
    display: none;
}
.toggle-box {
    width: 44px;
    height: 24px;
    background: #CBD5E1;
    border-radius: 9999px;
    position: relative;
    transition: background 0.2s;
    flex-shrink: 0;
}
.toggle-knob {
    width: 18px;
    height: 18px;
    background: #FFFFFF;
    border-radius: 50%;
    position: absolute;
    top: 3px;
    left: 3px;
    transition: transform 0.2s;
    box-shadow: 0 1px 3px rgba(0,0,0,0.2);
}
.toggle-label input:checked + .toggle-box {
    background: #A7C123;
}
.toggle-label input:checked + .toggle-box .toggle-knob {
    transform: translateX(20px);
}
.earnings-fields {
    margin-top: 1.25rem;
    padding-top: 1.25rem;
    border-top: 1px solid #E2E8F0;
}

/* Social icons */
.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 800;
}
.social-icon.linkedin { background: #0077B5; color: #fff; }
.social-icon.facebook { background: #1877F2; color: #fff; }
.social-icon.twitter { background: #000000; color: #fff; }

/* Review step */
.review-sections {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}
.review-block {
    background: #F8FAFC;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    padding: 1.25rem;
}
.review-block-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.925rem;
    font-weight: 700;
    color: #242619;
    margin-bottom: 0.85rem;
    padding-bottom: 0.4rem;
    border-bottom: 1px solid #E2E8F0;
    font-family: 'Sora', sans-serif;
}
.btn-edit-step {
    background: none;
    border: none;
    font-size: 0.78rem;
    font-weight: 700;
    color: #A7C123;
    cursor: pointer;
    text-decoration: underline;
}
.review-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.65rem 1.25rem;
}
@media (max-width: 640px) {
    .review-grid {
        grid-template-columns: 1fr;
    }
}
.rl {
    font-size: 0.75rem;
    font-weight: 600;
    color: #64748B;
    display: block;
}
.rv {
    font-size: 0.875rem;
    color: #242619;
    font-weight: 500;
}
.review-text {
    margin-top: 0.75rem;
    font-size: 0.85rem;
    color: #334155;
    background: #FFFFFF;
    padding: 0.75rem;
    border-radius: 8px;
    border: 1px solid #E2E8F0;
}

/* CGV */
.cgv-block {
    margin-top: 1.75rem;
    padding: 1rem;
    background: #F8FAF0;
    border: 1px solid rgba(167, 193, 35, 0.4);
    border-radius: 12px;
}
.cgv-label {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    font-size: 0.85rem;
    color: #242619;
    cursor: pointer;
}
.cgv-label input {
    margin-top: 0.2rem;
    accent-color: #A7C123;
}
.cgv-label a {
    color: #A7C123;
    text-decoration: underline;
    font-weight: 600;
}

/* Navigation buttons (Image 2 style: prominent primary button) */
.form-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 2.25rem;
    padding-top: 1.5rem;
    border-top: 1px solid #F1F5F9;
    gap: 1rem;
}
.btn-prev {
    padding: 0.85rem 1.6rem;
    border-radius: 12px;
    border: 1.5px solid #E2E8F0;
    background: #FFFFFF;
    color: #475569;
    font-size: 0.875rem;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s;
}
.btn-prev:hover {
    background: #F8FAFC;
    color: #242619;
    border-color: #CBD5E1;
}
.btn-next, .btn-submit {
    padding: 0.9rem 2.25rem;
    border-radius: 12px;
    border: none;
    background: #242619;
    color: #FFFFFF;
    font-family: 'Sora', sans-serif;
    font-size: 0.9rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(36, 38, 25, 0.2);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.6rem;
    letter-spacing: 0.02em;
}
.btn-next:hover, .btn-submit:hover {
    background: #A7C123;
    color: #242619;
    box-shadow: 0 6px 18px rgba(167, 193, 35, 0.35);
    transform: translateY(-1px);
}
.btn-next:disabled, .btn-submit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

/* Success state */
.postuler-success {
    max-width: 650px;
    margin: 3rem auto;
    background: #ffffff;
    border-radius: 28px;
    padding: 3rem;
    text-align: center;
    box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.06);
    border: 1px solid #E2E8F0;
}
.confetti-icon {
    font-size: 3.5rem;
    margin-bottom: 1rem;
}
.postuler-success h1 {
    font-size: 1.75rem;
    font-weight: 800;
    color: #242619;
    margin-bottom: 0.75rem;
    font-family: 'Sora', sans-serif;
}
.postuler-success p {
    font-size: 0.95rem;
    color: #64748B;
    line-height: 1.6;
}
.success-ref {
    display: inline-flex;
    flex-direction: column;
    gap: 0.25rem;
    background: #F1F7D7;
    border: 1.5px solid #A7C123;
    border-radius: 14px;
    padding: 0.75rem 2rem;
    margin: 1.75rem 0;
}
.success-ref .label {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #242619;
    font-family: 'Sora', sans-serif;
}
.success-ref .ref-code {
    font-size: 1.5rem;
    font-weight: 800;
    color: #242619;
    font-family: monospace;
    letter-spacing: 0.05em;
}
.success-note {
    font-size: 0.85rem !important;
    color: #64748B;
    margin-bottom: 2rem;
}
.btn-success-home {
    display: inline-block;
    padding: 0.85rem 2rem;
    background: #242619;
    color: #D8F741;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.925rem;
    transition: all 0.2s;
    font-family: 'Sora', sans-serif;
}
.btn-success-home:hover {
    background: #A7C123;
    color: #242619;
}

/* Alert error box */
.alert-errors {
    background: #FEF2F2;
    border: 1px solid #FECACA;
    border-radius: 14px;
    padding: 1rem 1.25rem;
    margin-bottom: 1.75rem;
    display: flex;
    gap: 0.85rem;
    color: #991B1B;
    font-size: 0.875rem;
}
.alert-errors strong {
    display: block;
    margin-bottom: 0.35rem;
    font-family: 'Sora', sans-serif;
}
.alert-errors ul {
    margin: 0;
    padding-left: 1.25rem;
}
.alert-icon {
    font-size: 1.25rem;
    flex-shrink: 0;
}
</style>