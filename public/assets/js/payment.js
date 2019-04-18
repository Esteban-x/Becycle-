var stripe = Stripe('pk_test_wubRn6KGb7d52YPXG5FY0RHr00FdiEw0xK');

function checkout(session){
    stripe.redirectToCheckout({
        sessionId: session
    }).then(function (result) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer
        // using `result.error.message`.
    });
}