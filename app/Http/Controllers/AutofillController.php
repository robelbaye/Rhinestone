<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutofillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('portal.country.autofill');
    }

    public function fetch(Request $request)
    {
        if($request->get('country'))
        {
            $query = $request->get('country');
            $data = DB::table('countries')
                    ->where('name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->name.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        // Inventor Search Starts Hear
        if($request->get('inventorname'))
        {
            $query = $request->get('inventorname');
            $data = DB::table('investors')
                    ->where('InvestorLastName','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }

        if($request->get('inventorgiven'))
        {
            $query = $request->get('inventorgiven');
            $data = DB::table('investors')
                    ->where('InvestorGivenName','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }

        if($request->get('inventorphone'))
        {
            $query = $request->get('inventorphone');
            $data = DB::table('investors')
                    ->where('InvestorPhone','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }

        if($request->get('inventoremail'))
        {
            $query = $request->get('inventoremail');
            $data = DB::table('investors')
                    ->where('InvestorEmail','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        
        if($request->get('inventorcontractor'))
        {
            $query = $request->get('inventorcontractor');
            $data = DB::table('investors')
                    ->where('Contractor','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                
        if($request->get('inventorcontractortype'))
        {
            $query = $request->get('inventorcontractortype');
            $data = DB::table('investors')
                    ->where('ContractorType','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                        
        if($request->get('inventorhome'))
        {
            $query = $request->get('inventorhome');
            $data = DB::table('investors')
                    ->where('Home','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                
        if($request->get('inventorzip_code'))
        {
            $query = $request->get('inventorzip_code');
            $data = DB::table('investors')
                    ->where('Zip_Code','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }

        if($request->get('inventoremplyeename'))
        {
            $query = $request->get('inventoremplyeename');
            $data = DB::table('investors')
                    ->where('Employer_Name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        
        if($request->get('inventoremplyeeaddress'))
        {
            $query = $request->get('inventoremplyeeaddress');
            $data = DB::table('investors')
                    ->where('Employer_Address','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                
        if($request->get('inventoremailoffuture'))
        {
            $query = $request->get('inventoremailoffuture');
            $data = DB::table('investors')
                    ->where('Email_of_Future_Contact','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        // Inventor Search Ends Hear

        // Applicant Search Starts Hear
                
        if($request->get('applicantid'))
        {
            $query = $request->get('applicantid');
            $data = DB::table('applicants')
                    ->where('applicant_ID','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                        
        if($request->get('applicantname'))
        {
            $query = $request->get('applicantname');
            $data = DB::table('applicants')
                    ->where('applicant_name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                        
        if($request->get('applicantaddress'))
        {
            $query = $request->get('applicantaddress');
            $data = DB::table('applicants')
                    ->where('applicant_address','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                
        if($request->get('applicantphone'))
        {
            $query = $request->get('applicantphone');
            $data = DB::table('applicants')
                    ->where('applicant_phone','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                
        if($request->get('applicantemail'))
        {
            $query = $request->get('applicantemail');
            $data = DB::table('applicants')
                    ->where('applicant_email','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        // Applicant Ends Hear

        // Licensee Starts Hear
                                
        if($request->get('licenseeid'))
        {
            $query = $request->get('licenseeid');
            $data = DB::table('licensees')
                    ->where('Licensee_ID','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                        
        if($request->get('licenseename'))
        {
            $query = $request->get('licenseename');
            $data = DB::table('licensees')
                    ->where('Licensee_Name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                
        if($request->get('licenseeaddress'))
        {
            $query = $request->get('licenseeaddress');
            $data = DB::table('licensees')
                    ->where('Licensee_Address','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                        
        if($request->get('licenseeemail'))
        {
            $query = $request->get('licenseeemail');
            $data = DB::table('licensees')
                    ->where('Licensee_Email','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        // Licensee Ends Hear

        // Licensor Starts Hear
                                                        
        if($request->get('licensorid'))
        {
            $query = $request->get('licensorid');
            $data = DB::table('licensors')
                    ->where('Licensor_ID','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                
        if($request->get('licensorlastname'))
        {
            $query = $request->get('licensorlastname');
            $data = DB::table('licensors')
                    ->where('Last_Name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                        
        if($request->get('licensorgivenname'))
        {
            $query = $request->get('licensorgivenname');
            $data = DB::table('licensors')
                    ->where('Given_Name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                                
        if($request->get('licensorhomeaddress'))
        {
            $query = $request->get('licensorhomeaddress');
            $data = DB::table('licensors')
                    ->where('Home_Address','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                                        
        if($request->get('licensoremployer'))
        {
            $query = $request->get('licensoremployer');
            $data = DB::table('licensors')
                    ->where('Employer','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                                                
        if($request->get('licensorcontractor'))
        {
            $query = $request->get('licensorcontractor');
            $data = DB::table('licensors')
                    ->where('Contractor','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                                                        
        if($request->get('licensorcontractortype'))
        {
            $query = $request->get('licensorcontractortype');
            $data = DB::table('licensors')
                    ->where('ContractorType','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                                                                
        if($request->get('licensoremailoffuture'))
        {
            $query = $request->get('licensoremailoffuture');
            $data = DB::table('licensors')
                    ->where('Email_of_Future_Contact','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        // Licensor Ends Hear

        // Agent Starts Hear
                                                                                                                        
        if($request->get('agentname'))
        {
            $query = $request->get('agentname');
            $data = DB::table('agents')
                    ->where('agent_name','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                                                                                                                
        if($request->get('agentaddress'))
        {
            $query = $request->get('agentaddress');
            $data = DB::table('agents')
                    ->where('agent_address','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        
        if($request->get('agentcontactperson'))
        {
            $query = $request->get('agentcontactperson');
            $data = DB::table('agents')
                    ->where('agent_contact_person','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                
        if($request->get('agentemail'))
        {
            $query = $request->get('agentemail');
            $data = DB::table('agents')
                    ->where('agent_email','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                        
        if($request->get('agentfax'))
        {
            $query = $request->get('agentfax');
            $data = DB::table('agents')
                    ->where('agent_fax_number','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                
        if($request->get('agentofficephone'))
        {
            $query = $request->get('agentofficephone');
            $data = DB::table('agents')
                    ->where('agent_office_phone','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
                                        
        if($request->get('agentfutureemail'))
        {
            $query = $request->get('agentfutureemail');
            $data = DB::table('agents')
                    ->where('agent_future_email','LIKE',"%{$query}%")
                    ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->InvestorLastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
        // Agent Ends Hear
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
