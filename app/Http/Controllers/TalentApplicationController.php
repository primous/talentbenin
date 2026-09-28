<?php

namespace App\Http\Controllers;

use App\Models\TalentApplication;
use Illuminate\Http\Request;

class TalentApplicationController extends Controller
{
    /**
     * Show the multi-step application form.
     */
    public function create()
    {
        return view('application.create');
    }

    /**
     * Show the application confirmation screen.
     */
    public function confirmation(string $reference)
    {
        $application = TalentApplication::where('reference', $reference)->firstOrFail();

        return view('application.confirmation', compact('application'));
    }

    /**
     * Show the form for candidate to provide requested additional information.
     */
    public function complete(string $reference)
    {
        $application = TalentApplication::where('reference', $reference)
            ->with(['skills', 'categories', 'projects'])
            ->firstOrFail();

        return view('application.complete', compact('application'));
    }

    /**
     * Handle submission of requested additional information.
     */
    public function submitCompletion(Request $request, string $reference)
    {
        $application = TalentApplication::where('reference', $reference)->firstOrFail();

        $validated = $request->validate([
            'candidate_response' => 'required|string|min:10|max:2000',
            'additional_links'   => 'nullable|string|max:500',
        ], [
            'candidate_response.required' => 'Veuillez saisir votre réponse aux précisions demandées.',
            'candidate_response.min'      => 'Votre réponse doit comporter au moins 10 caractères.',
        ]);

        $fullResponse = $validated['candidate_response'];
        if (!empty($validated['additional_links'])) {
            $fullResponse .= "\n\n[Liens ou éléments complémentaires] :\n" . $validated['additional_links'];
        }

        $application->update([
            'candidate_response_message' => $fullResponse,
            'status'                     => TalentApplication::STATUS_UNDER_REVIEW,
        ]);

        return redirect()->route('talent.application.complete', ['reference' => $reference])
            ->with('success', 'Vos informations complémentaires ont été enregistrées avec succès. Votre dossier est de nouveau en cours d\'examen.');
    }
}
